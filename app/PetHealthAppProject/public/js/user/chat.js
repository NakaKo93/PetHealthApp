document.addEventListener('DOMContentLoaded', function() {
    var chatForm = document.getElementById('chat-form');

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault(); 

        // form内のデータをobjectに変換
        const formData = new FormData(chatForm);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        // クエリパラメータを取得
        const actionUrl = new URL(chatForm.action);
        const params = new URLSearchParams(actionUrl.search);
        const petId = params.get('petId');
        const vetId = params.get('vetId');

        // formのデータと統合
        data.petId = petId;
        data.vetId = vetId;

        // 非同期処理
        fetch(actionUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('チャットの送信に失敗しました');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === "error") {
                // HTMLのメッセージ部分を編集
                const errorContainer = document.getElementById('error-box');

                // HTMLのメッセージを追加
                let message = '';
                data.errors.forEach(error => {
                    message += '${error}<br>';
                });
                errorContainer.innerHTML = message;
            }else{
                // HTMLのメッセージ部分を編集
                const chatContainer = document.getElementById('chat-box');
                // 既存のHTMLのメッセージを消去
                chatContainer.innerHTML = '';

                // HTMLのメッセージを追加
                data.chatsList.forEach(chat => {
                    const messageElement = document.createElement('div');
                    if (chat.from_vet) {
                        messageElement.classList.add('flex-vert-s', 'W-90', 'my-1');
                        messageElement.innerHTML = `
                            <div class="message-box-s ps-3 pe-1 py-2 bg-menu-vet-2">
                                <p class="txt-white">${chat.message || 'メッセージを取得できませんでした'}</p>
                            </div>
                            <div class="flex-bes txt-gray fs-7">
                                <p>${data.vetName}</p>
                                <p>${new Date(chat.date).toLocaleString()}</p>
                            </div>
                        `;
                    } else {
                        messageElement.classList.add('flex-vert-e', 'W-90', 'my-1');
                        messageElement.innerHTML = `
                            <div class="message-box-e ps-3 pe-1 py-2 bg-menu-user-2">
                                <p class="txt-white">${chat.message || 'メッセージを取得できませんでした'}</p>
                            </div>
                            <div class="flex-bes txt-gray fs-7">
                                <p class="ms-auto">${new Date(chat.date).toLocaleString()}</p>
                            </div>
                        `;
                    }
                    chatContainer.appendChild(messageElement);
                });
                
                // テキストエリアの中身を消去する
                document.getElementById('message').value = '';
            }
        })
        .catch(error => {
            console.error('チャットの送信に失敗しました', error);
        });
    });
});