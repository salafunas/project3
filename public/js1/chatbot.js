document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const input = document.getElementById('chatbot-input');
    const sendBtn = document.getElementById('send-btn');
    const attachBtn = document.getElementById('attach-btn');
    const clearBtn = document.getElementById('clear-chat');
    const fileInput = document.getElementById('file-input');
    const messagesContainer = document.getElementById('chatbot-messages');
    const quickBtns = document.querySelectorAll('.quick-btn');
    
    // FAQ Responses
    const faqResponses = {
        "tutorial codeigniter": {
            text: "Berikut tutorial CodeIgniter untuk pemula:<br><br>" +
                  "1. <a href='<?= base_url('tutorial/ci-dasar') ?>' class='chat-link'>Dasar-dasar CodeIgniter</a><br>" +
                  "2. <a href='<?= base_url('tutorial/ci-database') ?>' class='chat-link'>Menggunakan Database</a><br>" +
                  "3. <a href='<?= base_url('tutorial/ci-crud') ?>' class='chat-link'>Membuat CRUD</a>",
            delay: 2000
        },
        "cara membuat website": {
            text: "Langkah membuat website:<br><br>" +
                  "1. Pelajari HTML & CSS dasar<br>" +
                  "2. Pelajari JavaScript dasar<br>" +
                  "3. Pilih framework (CodeIgniter, Laravel, dll)<br>" +
                  "4. Pelajari deployment<br><br>" +
                  "Kami punya <a href='<?= base_url('learning-path') ?>' class='chat-link'>learning path</a> lengkap!",
            delay: 2500
        },
        "kontak developer": {
            text: "Anda bisa menghubungi developer melalui:<br><br>" +
                  "• Email: dev@n4s.com<br>" +
                  "• WhatsApp: <a href='https://wa.me/6281234567890' class='chat-link'>+62 812-3456-7890</a><br>" +
                  "• <a href='<?= base_url('kontak') ?>' class='chat-link'>Form Kontak</a> kami",
            delay: 1500
        },
        "default": {
            text: "Maaf saya tidak mengerti. Coba tanyakan tentang:<br>" +
                  "- Tutorial CodeIgniter<br>" +
                  "- Cara membuat website<br>" +
                  "- Kontak developer",
            delay: 1000
        }
    };
    
    // Add message to chat
    function addMessage(text, isUser = false) {
        const msgDiv = document.createElement('div');
        msgDiv.className = isUser ? 'user-message message' : 'bot-message message';
        
        const msgContent = document.createElement('div');
        msgContent.className = 'msg-content';
        msgContent.innerHTML = text;
        
        const msgTime = document.createElement('div');
        msgTime.className = 'msg-time';
        msgTime.textContent = getCurrentTime();
        
        msgDiv.appendChild(msgContent);
        msgDiv.appendChild(msgTime);
        
        messagesContainer.appendChild(msgDiv);
        scrollToBottom();
    }
    
    // Show typing indicator
    function showTyping() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'bot-message message typing-indicator';
        
        const typingText = document.createElement('div');
        typingText.className = 'msg-content';
        typingText.textContent = 'N4S Assistant mengetik';
        
        const dots = document.createElement('div');
        dots.className = 'typing-dots';
        dots.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';
        
        typingText.appendChild(dots);
        typingDiv.appendChild(typingText);
        
        messagesContainer.appendChild(typingDiv);
        scrollToBottom();
        return typingDiv;
    }
    
    // Get current time in HH:MM format
    function getCurrentTime() {
        const now = new Date();
        return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }
    
    // Scroll to bottom
    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
    
    // Get bot response
    function getBotResponse(userMessage) {
        const lowerMsg = userMessage.toLowerCase();
        
        if (lowerMsg.includes('codeigniter') || lowerMsg.includes('ci') || lowerMsg.includes('tutorial')) {
            return faqResponses['tutorial codeigniter'];
        } else if (lowerMsg.includes('website') || lowerMsg.includes('buat') || lowerMsg.includes('membuat')) {
            return faqResponses['cara membuat website'];
        } else if (lowerMsg.includes('kontak') || lowerMsg.includes('hubung') || lowerMsg.includes('developer')) {
            return faqResponses['kontak developer'];
        } else {
            return faqResponses['default'];
        }
    }
    
    // Send message
    function sendMessage() {
        const message = input.value.trim();
        if (!message) return;
        
        addMessage(message, true);
        input.value = '';
        
        // Show typing indicator
        const typing = showTyping();
        
        // Get response
        const response = getBotResponse(message);
        
        // Simulate delay
        setTimeout(() => {
            typing.remove();
            addMessage(response.text);
        }, response.delay);
    }
    
    // Clear chat
    function clearChat() {
        messagesContainer.innerHTML = `
            <div class="message bot-message welcome-msg">
                <div class="msg-content">
                    <p>Percakapan telah direset</p>
                    <p>Tanyakan apa yang ingin Anda ketahui:</p>
                    <ul class="quick-questions">
                        <li><button class="quick-btn">Tutorial CodeIgniter</button></li>
                        <li><button class="quick-btn">Cara membuat website</button></li>
                        <li><button class="quick-btn">Kontak developer</button></li>
                    </ul>
                </div>
                <div class="msg-time">Baru saja</div>
            </div>
        `;
        
        // Re-attach event listeners to new buttons
        document.querySelectorAll('.quick-btn').forEach(btn => {
            btn.addEventListener('click', handleQuickButton);
        });
    }
    
    // Handle quick buttons
    function handleQuickButton(e) {
        const question = e.target.textContent;
        input.value = question;
        sendMessage();
    }
    
    // Event Listeners
    sendBtn.addEventListener('click', sendMessage);
    input.addEventListener('keypress', (e) => e.key === 'Enter' && sendMessage());
    
    attachBtn.addEventListener('click', () => fileInput.click());
    
    fileInput.addEventListener('change', function() {
        if (this.files.length > 0) {
            addMessage(`Mengirim file: ${this.files[0].name}`, true);
            // Here you would normally upload the file
            setTimeout(() => {
                addMessage("Maaf, fitur upload file masih dalam pengembangan 🛠️");
            }, 1500);
        }
    });
    
    clearBtn.addEventListener('click', clearChat);
    
    // Quick buttons
    quickBtns.forEach(btn => {
        btn.addEventListener('click', handleQuickButton);
    });
    
    // Focus input on load
    input.focus();
});