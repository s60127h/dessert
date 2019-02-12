<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form>
    <label for="name">名字:</label>
    <input type="text" name="name">
    <br><br>

    <label for="password">密碼:</label>
    <input type="password" name="password">

    <p>性別:
    <input type="radio" name="sex" value="boy">
    <label for="sex">男</label>
    <input type="radio" name="sex" value="girl">
    <label for="sex">女</label>
    </p>

    <p>嗜好(可複選):
    <input type="checkbox" id="read"name="hobby" value="read">
    <label for="hobby">閱讀</label>
    <input type="checkbox" name="hobby" value="sport">
    <label for="hobby">運動</label>
    <input type="checkbox" name="hobby" value="music">
    <label for="hobby">音樂</label>
    <input type="checkbox" name="hobby" value="sleep">
    <label for="hobby">睡覺</label>
    <input type="checkbox" name="hobby" value="chart">
    <label for="hobby">聊天</label>
    </p>

    <input type="submit" value="送出表單">
    <input type="reset" value="重新輸入">
  </form>
</body>
</html>