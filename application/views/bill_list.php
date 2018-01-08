
<h1><?php echo lang('bill_heading');?></h1>
<p><?php echo lang('bill_subheading');?></p>
<hr>

<table class="table table-bordered table-responsive table-hover">
    <?php
    if (isset($bills))
    {
        echo '<thead><tr class="success">';
        echo '<th>#</th>';
        $headers = array_keys($bills[0]);
        foreach ($headers as $header)
        {
            echo '<th>' . $header . '</th>';
        }

        echo '</tr></thead>';

        echo '<tbody>';
        foreach ($bills as $n => $bill)
        {
            echo '<tr>';
            echo '<th scope="row">' . $n . '</th>';
            foreach ($bill as $key => $value)
            {
                echo '<td>'. $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
    }
    ?>
</table>
