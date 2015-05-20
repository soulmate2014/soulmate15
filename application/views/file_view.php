<!DOCTYPE html>
<html>
<head>
    <title>Upload Form</title>
    <style type="text/css">
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php echo $error;?>
    <?php echo form_open_multipart('upload_controller/do_upload'); ?>
        <input type="file" name="userfile" size="20" />
        <br />
        <input name="Submit" type="submit" value="upload" />
    </form>
</body>
</html>

