<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S - AI Assistant</title>
    <link rel="stylesheet" href="<?= base_url('css1/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css1/chatbot.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">N4S</a>
            <button class="navbar-toggler">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li><a href="<?= base_url() ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?= base_url('faqs') ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Kembali</a></li>
            </ul>
        </div>
    </nav>

    <div class="chatbot-container">
        <div class="chatbot-header">
            <div class="chatbot-profile">
                <div class="chatbot-avatar">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="chatbot-info">
                    <h1>N4S Assistant</h1>
                    <p class="status"><span class="online-dot"></span> Online</p>
                </div>
            </div>
            <div class="chatbot-actions">
                <button id="clear-chat" title="Bersihkan Percakapan">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
        
        <div class="chatbot-window">
            <div class="chatbot-messages" id="chatbot-messages">
                <div class="message bot-message welcome-msg">
                    <div class="msg-content">
                        <p>Halo! Saya N4S Assistant 🤖</p>
                        <p>Ada yang bisa saya bantu terkait:</p>
                        <ul class="quick-questions">
                            <li><button class="quick-btn">Tutorial CodeIgniter</button></li>
                            <li><button class="quick-btn">Cara membuat website</button></li>
                            <li><button class="quick-btn">Kontak developer</button></li>
                        </ul>
                    </div>
                    <div class="msg-time">Baru saja</div>
                </div>
            </div>
            
            <div class="chatbot-input-area">
                <button id="attach-btn" title="Lampirkan File">
                    <i class="fas fa-paperclip"></i>
                </button>
                <input type="text" id="chatbot-input" placeholder="Ketik pesan Anda..." autofocus>
                <button id="send-btn" title="Kirim Pesan">
                    <i class="fas fa-paper-plane"></i>
                </button>
                <input type="file" id="file-input" style="display: none;">
            </div>
        </div>
    </div>

    <script src="<?= base_url('js1/chatbot.js') ?>"></script>
</body>
</html>