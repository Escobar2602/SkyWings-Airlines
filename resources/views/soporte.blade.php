<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soporte</title>
</head>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Soporte') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <body class="font-sans bg-white">
        <div class="w-4/5 p-5 mx-auto my-5 bg-white rounded-lg shadow-lg">
            <header class="mb-8 text-center">

                <p class="mt-2 text-lg text-gray-800">
                    En caso de <strong class="font-semibold text-blue-800">bugs, orientación o capacitación</strong>, por
                    favor contactar con el equipo de desarrollo
                </p>
            </header>
            <div class="flex flex-wrap justify-center gap-8">
                <div
                    class="product-card w-[350px] rounded-md shadow-xl overflow-hidden relative cursor-pointer py-10 px-8 bg-white flex flex-col items-center justify-center gap-4 transition-all duration-300 group hover:scale-105">
                    <div class="absolute top-0 left-[-30%] group-hover:rotate-12 transition-all duration-300 group-hover:scale-150">
                        <div class="flex gap-1">
                            <svg class="fill-gray-300 rotate-[24deg]" stroke-linejoin="round" stroke-linecap="round" stroke-width="1"
                                fill="none" viewBox="0 0 24 24" height="220" width="220" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute rounded-full bg-gray-500 z-20 left-1/2 top-[50%] h-[120%] w-[120%] -translate-x-1/2 group-hover:top-[60%] transition-all duration-300"></div>
                    <div class="z-40 leading-none text-center uppercase para">
                        <h2 class="text-2xl font-bold text-blue-800">Web Developer</h2>
                        <p class="text-lg font-semibold text-gray-800">Hackect</p>
                        <p class="text-sm text-gray-600">Backend Developer / Base de Datos</p>
                    </div>
                    <p class="text-base text-gray-600"><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                    <p class="text-base text-gray-600"><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                   <BR></BR> <div class="z-40 flex gap-3 mt-5">
                        <button
                            class="flex items-center gap-2 px-5 py-3 text-white transition duration-200 bg-green-500 rounded-lg hover:bg-green-400"
                            onclick="chatWith('Admin')">
                            <i class="fas fa-comments"></i> Chat
                        </button>
                        <button
                            class="flex items-center gap-2 px-5 py-3 text-white transition duration-200 bg-blue-900 rounded-lg hover:bg-blue-800"
                            onclick="viewProfile('Admin')">
                            <i class="fas fa-user"></i> View Profile
                        </button>
                    </div>
                </div>


                <div class="flex flex-wrap justify-center gap-8">
                    <div
                        class="product-card w-[350px] rounded-md shadow-xl overflow-hidden relative cursor-pointer py-10 px-8 bg-white flex flex-col items-center justify-center gap-4 transition-all duration-300 group hover:scale-105">
                        <div class="absolute top-0 left-[-30%] group-hover:rotate-12 transition-all duration-300 group-hover:scale-150">
                            <div class="flex gap-1">
                                <svg class="fill-gray-300 rotate-[24deg]" stroke-linejoin="round" stroke-linecap="round" stroke-width="1"
                                    fill="none" viewBox="0 0 24 24" height="220" width="220" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute rounded-full bg-gray-500 z-20 left-1/2 top-[50%] h-[120%] w-[120%] -translate-x-1/2 group-hover:top-[60%] transition-all duration-300"></div>
                        <div class="z-40 leading-none text-center uppercase para">
                            <h2 class="text-2xl font-bold text-blue-800">Web Developer</h2>
                            <p class="text-lg font-semibold text-gray-800">Hackect</p>
                            <p class="text-sm text-gray-600">Backend Developer / Base de Datos</p>
                        </div>
                        <p class="text-base text-gray-600"><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                        <p class="text-base text-gray-600"><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                       <BR></BR> <div class="z-40 flex gap-3 mt-5">
                            <button
                                class="flex items-center gap-2 px-5 py-3 text-white transition duration-200 bg-green-500 rounded-lg hover:bg-green-400"
                                onclick="chatWith('Admin')">
                                <i class="fas fa-comments"></i> Chat
                            </button>
                            <button
                                class="flex items-center gap-2 px-5 py-3 text-white transition duration-200 bg-blue-900 rounded-lg hover:bg-blue-800"
                                onclick="viewProfile('Admin')">
                                <i class="fas fa-user"></i> View Profile
                            </button>
                        </div>
                    </div>

            </div>



        </div>

        <!-- Chatbot -->

        <div id="chatbot" class="fixed bottom-5 right-5">
            <button id="chatbot-btn"
                class="flex items-center justify-center p-4 text-2xl text-white bg-blue-800 rounded-full shadow-md hover:bg-blue-900">
                <i class="fas fa-comments"></i>
            </button>
            <div id="chat-window"
                class="hidden fixed bottom-20 right-5 w-80 h-[450px] border border-gray-300 rounded-lg bg-white shadow-md flex flex-col transition-transform duration-300">
                <div id="chat-header" class="flex items-center justify-between p-3 text-white bg-blue-900 rounded-t-lg">
                    <span>Soporte Técnico</span>
                    <div>
                        <button id="clear-history-btn" class="text-sm text-white">Limpiar</button>
                        <button id="close-chat" class="text-lg text-white">&times;</button>
                    </div>
                </div>
                <div id="chat-content" class="flex flex-col flex-1 p-3 overflow-auto">
                    <div class="message bg-gray-200 p-3 rounded-lg mb-2 max-w-[80%] text-sm">Hola! ¿En qué puedo
                        ayudarte hoy?</div>
                </div>
                <div id="chat-input" class="flex p-3 border-t border-gray-300">
                    <input type="text" id="user-input" placeholder="Escribe un mensaje..."
                        class="flex-1 p-2 mr-2 text-sm border border-gray-300 rounded-lg">
                    <button id="send-btn"
                        class="flex items-center justify-center p-2 text-sm text-white bg-green-500 rounded-lg">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
<style>
    body {
        background-color: #ffffff;
    }

    .table-container {
        margin: 60px auto;
        padding: 10px;
        background-color: #fff;
        border-radius: 40px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-item input[type="radio"] {
        margin-right: 10px;
    }

    #dropdownRadioButton {
        margin-right: 10px;
    }

    .dataTables_filter {
        float: right;
    }

    .dataTables_paginate {
        float: right;
    }

    .dataTables_length {
        float: left;
    }

    .dataTables_info {
        float: left;
    }
</style>
<script>
    function chatWith(name) {
        alert(`Iniciando chat con Admin`);
    }

    function viewProfile(name) {
        alert(`Mostrando perfil de Admin`);
    }
    // chatbot
    document.getElementById('chatbot-btn').addEventListener('click', function() {
        const chatWindow = document.getElementById('chat-window');
        chatWindow.classList.remove('hidden');
        setTimeout(() => chatWindow.style.transform = 'scale(1)', 0);
        this.classList.add('hidden');
    });

    document.getElementById('close-chat').addEventListener('click', function() {
        const chatWindow = document.getElementById('chat-window');
        chatWindow.style.transform = 'scale(0)';
        setTimeout(() => {
            chatWindow.classList.add('hidden');
            document.getElementById('chatbot-btn').classList.remove('hidden');
        }, 300);
    });

    document.getElementById('send-btn').addEventListener('click', function() {
        sendMessage();
    });

    document.getElementById('user-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    document.getElementById('clear-history-btn').addEventListener('click', function() {
        clearChatHistory();
    });

    function sendMessage() {
        const userInput = document.getElementById('user-input');
        const message = userInput.value.trim();
        if (message) {
            addMessage('user-message', message);
            userInput.value = '';
            setTimeout(() => {
                showTypingIndicator();
                setTimeout(() => {
                    hideTypingIndicator();
                    const botResponse = getBotResponse(message);
                    addMessage('bot-message', botResponse);
                }, 1000);
            }, 500);
        }
    }

    function addMessage(className, text) {
        const chatContent = document.getElementById('chat-content');
        const messageDiv = document.createElement('div');
        messageDiv.className = 'message ' + className;
        messageDiv.textContent = text;
        chatContent.appendChild(messageDiv);
        chatContent.scrollTop = chatContent.scrollHeight;
        updateChatHistory();
    }

    function showTypingIndicator() {
        const chatContent = document.getElementById('chat-content');
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'typing-indicator';
        typingIndicator.innerHTML = '<span class="dot"></span><span class="dot"></span><span class="dot"></span>';
        typingIndicator.id = 'typing-indicator';
        chatContent.appendChild(typingIndicator);
        chatContent.scrollTop = chatContent.scrollHeight;
    }

    function hideTypingIndicator() {
        const typingIndicator = document.getElementById('typing-indicator');
        if (typingIndicator) {
            typingIndicator.remove();
        }
    }

    function getBotResponse(message) {
        const responses = {
            'hola': '¡Hola! ¿Cómo estás? ¿En qué puedo ayudarte hoy?',
            'adiós': '¡Adiós! Que tengas un buen día. Si necesitas más ayuda, no dudes en volver.',
            'cómo estás': 'Estoy bien, gracias por preguntar. ¿Tienes algún problema con la plataforma?',
            'qué puedes hacer': 'Puedo ayudarte con problemas técnicos, consultas académicas, y soporte general.',
            'necesito ayuda': 'Claro, ¿qué tipo de ayuda necesitas? ¿Puedes darme más detalles?',
            'problema técnico': 'Por favor, describe el problema técnico que estás experimentando y te ayudaré a solucionarlo.',
            'mantenimiento': '¿Qué tipo de mantenimiento necesitas? Puedo asistirte con actualizaciones, ajustes, y revisiones del sistema.',
            'soporte': 'Estoy aquí para brindarte soporte. ¿Cuál es tu consulta?',
            'error en la página': 'Lamento escuchar eso. ¿Puedes describir el error que estás viendo en la página?',
            'no funciona el botón': 'Vamos a revisar eso. ¿Cuál botón no está funcionando y qué debería hacer?',
            'la página no carga': 'Entiendo. ¿Has probado recargar la página o limpiar el caché del navegador?',
            'problemas de conexión': 'Podría ser un problema de red. ¿Estás conectado a Internet?',
            'actualización': '¿Necesitas ayuda con una actualización específica? Puedo guiarte a través del proceso.',
            'configuración': '¿Hay algún ajuste en particular que necesites configurar? Puedo ayudarte con la configuración de la plataforma.',
            'reiniciar': 'Reiniciar puede solucionar muchos problemas. ¿Has intentado apagar y encender la máquina?',
            'soporte técnico': 'Estoy aquí para soporte técnico. Por favor, describe tu problema para que pueda asistirte mejor.',
            'acceso denegado': 'Verifiquemos tus credenciales. ¿Estás seguro de que tu usuario y contraseña son correctos?',
            'olvidé mi contraseña': 'Puedes restablecer tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.',
            'error de servidor': 'Lamento escuchar eso. Estamos trabajando para solucionar el problema. Por favor, intenta nuevamente más tarde.',
            'no puedo acceder a mis cursos': 'Vamos a verificar eso. ¿Puedes proporcionarme tu ID de estudiante y el curso al que intentas acceder?',
            'mi cuenta está bloqueada': 'Lamentamos el inconveniente. Por favor, contacta al soporte técnico para desbloquear tu cuenta.',
            'problemas con el correo electrónico': '¿Qué tipo de problemas estás teniendo con el correo electrónico?',
            'el video no se reproduce': '¿Has comprobado tu conexión a Internet y actualizado tu navegador a la última versión?',
            'necesito asistencia con el foro': 'Claro, ¿qué tipo de asistencia necesitas con el foro?',
            'error al subir archivos': 'Asegúrate de que el archivo no exceda el tamaño máximo permitido y que esté en el formato correcto.',
            'cómo cambio mi contraseña': 'Puedes cambiar tu contraseña en la configuración de tu cuenta.',
            'no recibo notificaciones': 'Verifica que las notificaciones estén habilitadas en tu configuración y que no estén siendo bloqueadas por tu correo electrónico.',
            'cómo me inscribo en un curso': 'Puedes inscribirte en un curso desde el catálogo de cursos en la plataforma.',
            'problemas con el chat': '¿Podrías especificar qué tipo de problemas estás teniendo con el chat?',
            'no puedo ver mis calificaciones': 'Vamos a revisar eso. ¿Puedes decirme en qué curso estás teniendo problemas para ver tus calificaciones?',
            'necesito ayuda con el calendario': 'Claro, ¿qué tipo de ayuda necesitas con el calendario?',
            'cómo descargo materiales del curso': 'Puedes descargar materiales del curso desde la sección de recursos del curso.',
            'no puedo enviar mensajes': 'Verifiquemos tu configuración de mensajes y asegúrate de no estar bloqueado por el destinatario.',
            'cómo participo en una discusión': 'Puedes participar en una discusión haciendo clic en el tema de discusión y publicando tu comentario.',
            'no puedo unirme a una videoconferencia': 'Asegúrate de tener una conexión a Internet estable y de que tu cámara y micrófono estén funcionando correctamente.',
            'error de autenticación': 'Por favor, verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
            'problemas con el registro': '¿Puedes describir el problema que estás teniendo con el registro?',
            'cómo actualizo mi perfil': 'Puedes actualizar tu perfil desde la sección de configuración de tu cuenta.',
            'no puedo abrir documentos': 'Asegúrate de tener el software necesario para abrir los documentos. ¿Podrías decirme el formato del documento?',
            'cómo contacto a un profesor': 'Puedes contactar a un profesor a través del sistema de mensajería de la plataforma.',
            'mi cuenta fue hackeada': 'Lamentamos escuchar eso. Por favor, contacta al soporte técnico inmediatamente para asegurar tu cuenta.',
            'problemas con el acceso móvil': '¿Podrías especificar qué problemas estás teniendo con el acceso desde un dispositivo móvil?',
            'cómo restablezco mi contraseña': 'Puedes restablecer tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.',
            'no puedo descargar la app': 'Asegúrate de tener suficiente espacio en tu dispositivo y de estar conectado a Internet.',
            'cómo activo mi cuenta': 'Deberías haber recibido un correo electrónico de activación. ¿Podrías verificar tu bandeja de entrada y correo no deseado?',
            'no puedo ver las tareas': 'Vamos a verificar eso. ¿Puedes decirme en qué curso no puedes ver las tareas?',
            'problemas con la sincronización': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
            'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
            'problemas con la autenticación en dos pasos': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación en dos pasos.',
            'cómo accedo a mis calificaciones': 'Puedes acceder a tus calificaciones desde la sección de calificaciones de tu curso.',
            'no recibo correos de la plataforma': 'Verifica tu carpeta de correo no deseado y asegúrate de que las notificaciones estén habilitadas.',
            'error al abrir enlaces': 'Asegúrate de que tu navegador esté actualizado y que los enlaces no estén bloqueados por tu red.',
            'cómo creo una cuenta': 'Puedes crear una cuenta desde la página de registro en la plataforma.',
            'problemas con la carga de páginas': 'Podría ser un problema de conexión. Intenta recargar la página o utilizar otro navegador.',
            'cómo edito mi perfil': 'Puedes editar tu perfil desde la sección de configuración de tu cuenta.',
            'problemas con la videollamada': 'Asegúrate de tener una conexión a Internet estable y de que tu cámara y micrófono estén funcionando correctamente.',
            'cómo accedo a los recursos del curso': 'Puedes acceder a los recursos del curso desde la sección de recursos del curso.',
            'no puedo ver las lecciones en línea': 'Asegúrate de tener una conexión a Internet estable y de que tu navegador esté actualizado.',
            'problemas con el chat en vivo': 'Verifiquemos tu conexión a Internet y asegúrate de que no haya bloqueos en tu red.',
            'cómo participo en los foros': 'Puedes participar en los foros desde la sección de foros de tu curso.',
            'problemas con la biblioteca en línea': '¿Podrías especificar qué problemas estás teniendo con la biblioteca en línea?',
            'cómo realizo un examen en línea': 'Puedes realizar un examen en línea desde la sección de evaluaciones de tu curso.',
            'no puedo ver los anuncios del curso': 'Verifiquemos tu configuración de notificaciones y asegúrate de estar inscrito en el curso correctamente.',
            'problemas con la visualización de videos': 'Asegúrate de tener una conexión a Internet estable y de que tu navegador esté actualizado.',
            'cómo me comunico con otros estudiantes': 'Puedes comunicarte con otros estudiantes a través del sistema de mensajería de la plataforma.',
            'problemas con la carga de archivos': 'Asegúrate de que el archivo no exceda el tamaño máximo permitido y que esté en el formato correcto.',
            'cómo accedo a la asistencia técnica': 'Puedes acceder a la asistencia técnica a través del sistema de soporte de la plataforma.',
            'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
            'cómo accedo a mis mensajes': 'Puedes acceder a tus mensajes desde la sección de mensajería de tu cuenta.',
            'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
            'cómo utilizo las herramientas de evaluación': 'Puedes utilizar las herramientas de evaluación desde la sección correspondiente en tu curso.',
            'problemas con el sistema de calificaciones': 'Vamos a verificar eso. ¿Puedes proporcionarme más detalles sobre el problema que estás teniendo?',
            'cómo configuro las notificaciones': 'Puedes configurar las notificaciones desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de pagos': '¿Podrías especificar qué problemas estás teniendo con el sistema de pagos?',
            'cómo accedo a los informes de progreso': 'Puedes acceder a los informes de progreso desde la sección de informes de tu curso.',
            'problemas con la autenticación de dos factores': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación de dos factores.',
            'cómo utilizo las herramientas de comunicación': 'Puedes utilizar las herramientas de comunicación desde la sección correspondiente en tu curso.',
            'problemas con la sincronización de datos': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
            'cómo accedo a los materiales de estudio': 'Puedes acceder a los materiales de estudio desde la sección de recursos de tu curso.',
            'problemas con el sistema de gestión de tareas': '¿Podrías especificar qué problemas estás teniendo con el sistema de gestión de tareas?',
            'cómo configuro mi perfil': 'Puedes configurar tu perfil desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de registro': '¿Podrías especificar qué problemas estás teniendo con el sistema de registro?',
            'cómo accedo a los foros de discusión': 'Puedes acceder a los foros de discusión desde la sección de foros de tu curso.',
            'problemas con la visualización de documentos': 'Asegúrate de tener el software necesario para abrir los documentos y de que tu navegador esté actualizado.',
            'cómo accedo a los exámenes en línea': 'Puedes acceder a los exámenes en línea desde la sección de evaluaciones de tu curso.',
            'problemas con la visualización de tareas': 'Verifiquemos tu inscripción en el curso y asegúrate de que las tareas estén publicadas correctamente.',
            'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
            'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
            'cómo accedo a los anuncios del curso': 'Puedes acceder a los anuncios del curso desde la sección de anuncios de tu curso.',
            'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
            'cómo configuro las notificaciones': 'Puedes configurar las notificaciones desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de pagos': '¿Podrías especificar qué problemas estás teniendo con el sistema de pagos?',
            'cómo accedo a los informes de progreso': 'Puedes acceder a los informes de progreso desde la sección de informes de tu curso.',
            'problemas con la autenticación de dos factores': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación de dos factores.',
            'cómo utilizo las herramientas de comunicación': 'Puedes utilizar las herramientas de comunicación desde la sección correspondiente en tu curso.',
            'problemas con la sincronización de datos': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
            'cómo accedo a los materiales de estudio': 'Puedes acceder a los materiales de estudio desde la sección de recursos de tu curso.',
            'problemas con el sistema de gestión de tareas': '¿Podrías especificar qué problemas estás teniendo con el sistema de gestión de tareas?',
            'cómo configuro mi perfil': 'Puedes configurar tu perfil desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de registro': '¿Podrías especificar qué problemas estás teniendo con el sistema de registro?',
            'cómo accedo a los foros de discusión': 'Puedes acceder a los foros de discusión desde la sección de foros de tu curso.',
            'problemas con la visualización de documentos': 'Asegúrate de tener el software necesario para abrir los documentos y de que tu navegador esté actualizado.',
            'cómo accedo a los exámenes en línea': 'Puedes acceder a los exámenes en línea desde la sección de evaluaciones de tu curso.',
            'problemas con la visualización de tareas': 'Verifiquemos tu inscripción en el curso y asegúrate de que las tareas estén publicadas correctamente.',
            'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
            'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
            'cómo accedo a los anuncios del curso': 'Puedes acceder a los anuncios del curso desde la sección de anuncios de tu curso.',
            'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
            'cómo configuro las notificaciones': 'Puedes configurar las notificaciones desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de pagos': '¿Podrías especificar qué problemas estás teniendo con el sistema de pagos?',
            'cómo accedo a los informes de progreso': 'Puedes acceder a los informes de progreso desde la sección de informes de tu curso.',
            'problemas con la autenticación de dos factores': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación de dos factores.',
            'cómo utilizo las herramientas de comunicación': 'Puedes utilizar las herramientas de comunicación desde la sección correspondiente en tu curso.',
            'problemas con la sincronización de datos': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
            'cómo accedo a los materiales de estudio': 'Puedes acceder a los materiales de estudio desde la sección de recursos de tu curso.',
            'problemas con el sistema de gestión de tareas': '¿Podrías especificar qué problemas estás teniendo con el sistema de gestión de tareas?',
            'cómo configuro mi perfil': 'Puedes configurar tu perfil desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de registro': '¿Podrías especificar qué problemas estás teniendo con el sistema de registro?',
            'cómo accedo a los foros de discusión': 'Puedes acceder a los foros de discusión desde la sección de foros de tu curso.',
            'problemas con la visualización de documentos': 'Asegúrate de tener el software necesario para abrir los documentos y de que tu navegador esté actualizado.',
            'cómo accedo a los exámenes en línea': 'Puedes acceder a los exámenes en línea desde la sección de evaluaciones de tu curso.',
            'problemas con la visualización de tareas': 'Verifiquemos tu inscripción en el curso y asegúrate de que las tareas estén publicadas correctamente.',
            'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
            'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
            'cómo accedo a los anuncios del curso': 'Puedes acceder a los anuncios del curso desde la sección de anuncios de tu curso.',
            'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
            'cómo configuro las notificaciones': 'Puedes configurar las notificaciones desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de pagos': '¿Podrías especificar qué problemas estás teniendo con el sistema de pagos?',
            'cómo accedo a los informes de progreso': 'Puedes acceder a los informes de progreso desde la sección de informes de tu curso.',
            'problemas con la autenticación de dos factores': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación de dos factores.',
            'cómo utilizo las herramientas de comunicación': 'Puedes utilizar las herramientas de comunicación desde la sección correspondiente en tu curso.',
            'problemas con la sincronización de datos': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
            'cómo accedo a los materiales de estudio': 'Puedes acceder a los materiales de estudio desde la sección de recursos de tu curso.',
            'problemas con el sistema de gestión de tareas': '¿Podrías especificar qué problemas estás teniendo con el sistema de gestión de tareas?',
            'cómo configuro mi perfil': 'Puedes configurar tu perfil desde la sección de configuración de tu cuenta.',
            'problemas con el sistema de registro': '¿Podrías especificar qué problemas estás teniendo con el sistema de registro?',
            'cómo accedo a los foros de discusión': 'Puedes acceder a los foros de discusión desde la sección de foros de tu curso.',
            'problemas con la visualización de documentos': 'Asegúrate de tener el software necesario para abrir los documentos y de que tu navegador esté actualizado.',
            'cómo accedo a los exámenes en línea': 'Puedes acceder a los exámenes en línea desde la sección de evaluaciones de tu curso.',
            'problemas con la visualización de tareas': 'Verifiquemos tu inscripción en el curso y asegúrate de que las tareas estén publicadas correctamente.',
            'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
            'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
            'cómo accedo a los anuncios del curso': 'Puedes acceder a los anuncios del curso desde la sección de anuncios de tu curso.',
            'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
        };

        return responses[message.toLowerCase()] ||
            'Lamentablemente, en este momento no puedo asistirte directamente debido a mis capacidades limitadas.';
    }


    function updateChatHistory() {
        const chatContent = document.getElementById('chat-content').innerHTML;
        localStorage.setItem('chatHistory', chatContent);
    }

    function loadChatHistory() {
        const chatHistory = localStorage.getItem('chatHistory');
        if (chatHistory) {
            document.getElementById('chat-content').innerHTML = chatHistory;
        }
    }

    function clearChatHistory() {
        localStorage.removeItem('chatHistory');
        document.getElementById('chat-content').innerHTML =
            '<div class="message bot-message">Hola! ¿En qué puedo ayudarte hoy?</div>';
    }

    window.onload = loadChatHistory;
</script>
