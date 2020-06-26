//<![CDATA[
    function isl_connect() {
        var doc = document,
            f = doc.getElementById('assistance-contenu'),
            r = doc.getElementById('isl-feedback'),
            is_msie = navigator.userAgent.indexOf('MSIE') >= 0,
            b = null;
        
        ISLOnline.Join.getSessionInfoByCode(
            f.code.value,
            function (info) {
                r.className = 'isl-success';
                r.innerHTML = 'Connecting to session ' + info.getAttribute('sessionCode');
                if (is_msie) {
                    r.innerHTML += ', please click the button below:<br />';
                    r.appendChild(doc.createElement('br'));
                    var b = doc.createElement('input');
                    b.type = 'button';
                    b.name = 'join';
                    b.value = 'Start';
                    b.onclick = function () {
                        info.join();
                    };
                    r.appendChild(b);
                } else {
                    info.join();
                }
            },
            function (error) {
                r.className = 'isl-error';
                r.innerHTML = '<p class="texte-error-assistance">Code de session invalide !</p>';
                /* comment the line above and uncomment the line below if you wish to
                    display the error that is sent by the server */
                //r.innerHTML += error.getDescription();
            }
        );
        return false;
    }
//]]>