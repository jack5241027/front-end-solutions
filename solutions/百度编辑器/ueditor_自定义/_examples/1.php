<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>编辑器完整版实例</title>
    <script type="text/javascript" src="ueditor/editor_config.js"></script>
    <script type="text/javascript" src="ueditor/editor_all.js"></script>
</head>
<body>
    <textarea name="后台取值的key" id="myEditor">这里写你的初始化内容</textarea>
    <script type="text/javascript">
        var editor = new UE.ui.Editor();
        editor.render("myEditor");
        //1.2.4以后可以使用一下代码实例化编辑器
        //UE.getEditor('myEditor')
    </script>

</body>
</html>