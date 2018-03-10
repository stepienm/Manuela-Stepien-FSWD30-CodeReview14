<?php
require_once 'actions/connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM allE WHERE id = {$id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();
?>

 
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Event</title>
        <link rel="stylesheet" type="text/css" href="addStyle.css">
    </head>

    <body>

     

    <fieldset>

        <legend>Update Event</legend>
        <form action="actions/a_update.php" method="post">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" placeholder="First Name" value="<?php echo $data['name'] ?>" /></td>
                </tr>     
                <tr>
                    <th>small Image</th>
                    <td><input type="text" name="sImg" placeholder=" small image" value="<?php echo $data['sImg'] ?>" /></td>
                </tr>
                <tr>
                    <th>big Image</th>
                    <td><input type="text" name="bImg" placeholder=" big image" value="<?php echo $data['bImg'] ?>" /></td>
                </tr>

                <tr>
                    <th>Categorie</th>
                    <td><input type="text" name="categorie" placeholder="categorie" value="<?php echo $data['categorie'] ?>" /></td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><input type="text" name="eTime" placeholder="date and time" value="<?php echo $data['eTime'] ?>" /></td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td><input type="text" name="cost" placeholder="ticket cost " value="<?php echo $data['cost'] ?>" /></td>
                </tr>
                 <tr>
                    <th>Adress</th>
                    <td><input type="text" name="adress" placeholder="Adress " value="<?php echo $data['adress'] ?>" /></td>
                </tr>
                 <tr>
                    <th>E-Mail</th>
                    <td><input type="text" name="email" placeholder="E-Mail " value="<?php echo $data['email'] ?>" /></td>
                </tr>
                 <tr>
                    <th>Phone</th>
                    <td><input type="text" name="phone" placeholder="Phone " value="<?php echo $data['phone'] ?>" /></td>
                </tr>
                 <tr>
                    <th>URL</th>
                    <td><input type="text" name="url" placeholder="URL " value="<?php echo $data['url'] ?>" /></td>
                </tr>
                 <tr>
                    <th>Capacity</th>
                    <td><input type="text" name="capacity" placeholder="Capacity " value="<?php echo $data['capacity'] ?>" /></td>
                </tr>

            
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                    <td><button type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button type="button">Back</button></a></td>
                </tr>
            </table>

        </form>

    </fieldset>

    </body>

</html>

 

<?php
}
?>