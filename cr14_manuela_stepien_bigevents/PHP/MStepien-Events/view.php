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

        <title>View Event</title>
        <style>
            body{
              background-color:#e1f4f5;
            }
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 50%;
            }
            table tr th {
                padding-top: 20px;
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            td, th {
                border: 1px solid white;
                text-align: left;
                padding: 8px;
                width: 20%;
                background-color: white;    
              }
              th{
                color: grey;
              }
            button{
                font-size: 20px;
                border-radius: 5px;
                
            }
        </style>
    </head>

    <body>

    <fieldset>

        <legend>View Event</legend>

        <form action="actions/a_create.php" method="post">

            <table cellspacing="0" cellpadding="0">
                 <img src='<?php echo $data['bImg'] ?>' style='width:100%;height:250px;'>
                <tr>
                    <th>Name</th>
                    <td><?php echo $data['name'] ?></td>
                </tr> 
                <tr>
                    <th>Categorie</th>
                    <td><?php echo $data['categorie'] ?></td>
                </tr>     
                <tr>
                    <th>Time</th>
                    <td><?php echo $data['eTime'] ?></td>
                </tr>
                <tr>
                    <th>Capacity</th>
                    <td><?php echo $data['capacity'] ?></td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td><?php echo $data['cost'] ?> €</td>
                </tr>
                <tr>
                    <th>Adress</th>
                    <td><?php echo $data['adress'] ?></td>
                </tr>
                 <tr>
                    <th>Phone</th>
                    <td><?php echo $data['phone'] ?></td>
                </tr>
                <tr>
                    <th>E-Mail</th>
                    <td><?php echo $data['email'] ?></td>
                </tr>
                 <tr>
                    <th>URL</th>
                    <td><a href="<?php echo $data['url'] ?>"><?php echo $data['url'] ?></a>
                        </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $data['description'] ?></td>

                </tr>
                 <tr>
                    
                    
                </tr>

                <tr>
                    
                    <th><a href="guest.php"><button type="button">Back</button></a></th>
                    <td></td>
                </tr>

            </table>

        </form>

    </fieldset>

    </body>

</html>

<?php
}
?>