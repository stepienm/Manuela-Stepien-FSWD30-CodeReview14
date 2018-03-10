<!DOCTYPE html>

<html>
    <head>
        <title>PHP CRUD  |  Add User</title>
        <link rel="stylesheet" type="text/css" href="addStyle.css">

    </head>

    <body>

    <fieldset>

        <legend>Add Event</legend>

        <form action="actions/a_create.php" method="post">

            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" placeholder="Name"/></td>
                </tr>     
                <tr>
                    <th>small Image</th>
                    <td><input type="text" name="sImg" placeholder="Image URL"/></td>
                </tr>
                <tr>
                    <th>big Image</th>
                    <td><input type="text" name="bImg" placeholder="Image URL"/></td>
                </tr>

                <tr>
                    <th>Categorie</th>
                    <td><input type="text" name="categorie" placeholder="categorie"/></td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" placeholder="description" /></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><input type="text" name="eTime" placeholder="date and time"/></td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td><input type="text" name="cost" placeholder="ticket cost "/></td>
                </tr>
                <tr>
                    <th>Adress</th>
                    <td><input type="text" name="adress" placeholder="Adress "/></td>
                </tr>
                 <tr>
                    <th>E-Mail</th>
                    <td><input type="text" name="email" placeholder="E-Mail " /></td>
                </tr>
                 <tr>
                    <th>Phone</th>
                    <td><input type="text" name="phone" placeholder="Phone " /></td>
                </tr>
                 <tr>
                    <th>URL</th>
                    <td><input type="text" name="url" placeholder="URL "  /></td>
                </tr>
                 <tr>
                    <th>Capacity</th>
                    <td><input type="text" name="capacity" placeholder="Capacity " /></td>
                </tr>


                <tr>
                    <td><button type="submit">Insert Event</button></td>
                    <td><a href="home.php"><button type="button">Back</button></a></td>
                </tr>

            </table>

        </form>

    </fieldset>

    </body>

</html>

