<html>
    <body>
        <input type="button" onclick="location.href='index.html'" value="Go Back" id="back"/>
        <br><br>
        <?php
            $size = $_POST['input'];
            if ($size == "")
            {
                $size = 0;
            }
            else
            {
                $size = intval($size);
            }
            print "<table border=\"1\">";
            print "<tbody>";
            if ($size == 0)
            {
                print "<tr><td></td></tr>";
            }
            else
            {
                for ($row = 0; $row <= $size; $row++)
                {
                    print "<tr>";
                    for($column = 0; $column <= $size; $column++)
                    {
                        if ($row == 0)
                        {
                            if ($column == 0)
                            {
                                print "<td></td>";   
                            }
                            else
                            {
                                print "<td><b>{$column}</b></td>";
                            }
                        }
                        else
                        {
                            if ($column == 0)
                            {
                                print "<td><b>{$row}</b></td>";   
                            }
                            else
                            {
                                $temp = $row * $column;
                                print "<td><i>{$temp}</i></td>";
                            }
                        }
                    }
                    print "</tr>";
                }
            }
            print "</tbody>";
            print "</table>";
        ?>
    </body>
</html>