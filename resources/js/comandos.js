document.body.onclick = function () {
  annyang.start();
  console.log('Ready to receive a color command.');
}

if (annyang) {
  var comandos = {
    regresar: function () {
      window.history.back();
    },
    inicio: function () {
      openInNewTab(location.protocol + '//' + location.host + '/');
    },
    ranking: function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'ranking');
    },
    chatbot: function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'chatbot');
    },
    perfil: function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'profile');
    },
    'Iniciar sesión': function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'login');
    },
    registrarse: function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'register');
    },

    'módulo uno': function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'modulo-1');
    },
    'módulo dos': function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'modulo-2');
    },
    'módulo tres': function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'modulo-3');
    },
    'módulo cuatro': function () {
      openInNewTab(location.protocol + '//' + location.host + '/' + 'modulo-4');
    },
  };

  annyang.addCommands(comandos);
  annyang.setLanguage("es-PE");
  // annyang.start();
}


function openInNewTab(url) {
  var win = window.open(url, '_self');
  // console.log(window.location.href);
  console.log(location.protocol + '//' + location.host + '/')
  // win.focus();
  annyang.abort();
}

