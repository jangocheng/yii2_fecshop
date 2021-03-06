<?php

use yii\db\Migration;

/**
 * Class m181126_143605_fecshop_tables
 */
class m181126_143605_fecshop_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("INSERT INTO `admin_url_key` (`name`, `tag`, `tag_sort_order`, `url_key`, `created_at`, `updated_at`, `can_delete`) VALUES ('Error Page', 'dashboard_main', 2, '/fecadmin/error/index', 1543241523, 1543241523, 1)");
        
        $lastInsertId = $this->db->getLastInsertID() ;
        
        $this->execute("INSERT INTO `admin_role_url_key` (`role_id`, `url_key_id`, `created_at`, `updated_at`) VALUES (4, " . $lastInsertId . ", 1541129239, 1541129239)");
        
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181126_143605_fecshop_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181126_143605_fecshop_tables cannot be reverted.\n";

        return false;
    }
    */
}
