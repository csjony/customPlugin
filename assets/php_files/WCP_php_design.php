<?php


function php_design(){
global $wpdb;
$table_name= $wpdb->prefix."dbp_tb_user";
$DBP_results=$wpdb->get_results("SELECT * From $table_name");
    
?>

<table id="datatablesSimple">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </tfoot>
    <tbody>
       <?php foreach($DBP_results as $DBP_row){
        $username = $DBP_row->username;
        $email = $DBP_row->email;
        $role = $DBP_row->role;
        
    
    ?>
        <tr>
            <td><?php echo $username; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $role; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<?php } ?>
