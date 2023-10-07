<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Códigos QR</title>
</head>
<body>
    <h1>Generador de Códigos QR</h1>
    <input type="text" id="texto" placeholder="Texto o enlace">
    <button onclick="generarCodigoQR()">Generar QR</button>
    <button onclick="descargarCodigoQR()">Descargar QR</button>
    <div id="codigoQR"></div>

    <script src="qrcode.min.js"></script> <!-- Asegúrate de tener el archivo qrcode.min.js en la misma carpeta -->
    <script>
        var codigoQR; // Declarar una variable global para el código QR

        function generarCodigoQR() {
            var texto = document.getElementById('texto').value;
            codigoQR = new QRCode(document.getElementById('codigoQR'), {
                text: texto,
                width: 128,
                height: 128
            });
        }

        function descargarCodigoQR() {
            if (codigoQR) {
                var canvas = document.querySelector("#codigoQR canvas");
                var url = canvas.toDataURL("image/png");

                var a = document.createElement('a');
                a.href = url;
                a.download = 'codigo_qr.png';
                a.click();
            } else {
                alert('Primero genera un código QR antes de descargarlo.');
            }
        }
    </script>
</body>
</html>

