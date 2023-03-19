
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

<form id="form" onsubmit="return false;">
    <input type="text" placeholder="Введите сообщение" name="message">
    <input type="submit" value="Нажмите для отправки">
</form>

<iframe src="xer.php" id="iframe" style="display:block;height:100vh;width: 100vh;"></iframe>

<script>
    form.onsubmit = function() {
        iframe.contentWindow.postMessage(this.message.value, '*');
        return false;
    };
</script>

</body>
</html>