<?php

register_activation_hook( __FILE__ , 'likeMoneyCreateTables');

function getTableName()
{
    global $wpdb;

    $table = $wpdb->prefix . 'likeMoney';

    return $table;

}

function likeMoneyCreateTables()
{
    global $wpdb;

    $sql = "CREATE TABLE " . getTableName() . " 
            ( 
                idLike int(11) NOT NULL AUTO_INCREMENT,
                idPost int(11) NOT NULL,
                idAuthor int(11) NOT NULL,
                PRIMARY KEY (idLike)
            )";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    dbDelta($sql);

}

function insertDummy()
{
    global $wpdb;

    $wpdb->insert( 
        getTableName(), 
        array( 
            'idLike' => 1, 
            'idPost' => 1,
            'idAuthor' => 1, 
        )
     );    
}

function getLikeById($id)
{
    global $wpdb;

    $row = $wpdb->get_row( $wpdb->prepare('SELECT sum(idLike) as total FROM '. getTableName() .' WHERE idLike = %d', $id) );

    return $row;
}

insertDummy();



