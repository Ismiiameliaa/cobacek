<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRY OUT</title>
<style>
    .background{
        background-color: pink;
    }
    tr{
        background-color: bisque;
    }
</style>
</head>
<body>
<table border="1"> 
    <?php for ($i=0; $i < 10; $i++) { ?>
        <?php if ($i % 2 == 0) { ?>
            <tr class="background">
        <?php } ?>
            <?php for ($x=0; $x < 5; $x++) { ?>
                <td>
                    <?php echo $i.",".$x ?>
                </td>
            <?php } ?>
            </tr>
    <?php } ?>
</table>
</body>
</html>
