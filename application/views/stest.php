<table>
  <thead>
    <tr>
      <th>ACCOUNT NUMBER</th>
      <th>CATEGORY</th>
      <th>AMOUNT</th>
      </tr>
  </thead>
  <tbody>
    <?php
      $sqlTxt = "SELECT * FROM table WHERE column = 'Fruits' ";
      $sql = ORACLE::getInstance()->FetchArray($sqlTxt);
      if(count($sql) > 0)
      {
        $account_numbers = null;
        $categorys       = "";
        $amounts         = null;

        foreach($sql as $row)
        {
          if($row['ACCOUNT_NUMBER'] !== $account_numbers)
          {
            if ($account_numbers !== null)
            {
              echo '</td></tr>';
            }

            echo "<tr>
                    <td>{$row['ACCOUNT_NUMBER']}</td>
                    <td>{$row['CATEGORY']}";
          }
          else {
            echo "<br>{$selectionC['CATEGORY']}";
          }
          $account_numbers = $row['ACCOUNT_NUMBER'];
        }
            echo '  </td>
                  </tr>';
      }
    ?>
  </tbody>
</table>