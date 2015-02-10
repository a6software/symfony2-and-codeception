<?php

namespace Codeception\Module;

/**
 * Extends the standard Db helper to override cleanup behavior so that tables
 * are truncated rather than dropped and recreated between tests.
 */
class DbHelper extends \Codeception\Module\Db
{
    protected function cleanup()
    {
        exit('mew to');

        $dbh = $this->driver->getDbh();
        if (! $dbh) {
            throw new ModuleConfigException(
                __CLASS__,
                "No connection to database. Remove this module from config if you don't need database repopulation"
            );
        }

        try {
            if (! count($this->sql)) {
                return;
            }

            /** Start **/
            $dbh->exec('SET FOREIGN_KEY_CHECKS=0;');
            $res = $dbh->query("SHOW FULL TABLES WHERE TABLE_TYPE LIKE '%TABLE';")->fetchAll();
            foreach ($res as $row) {
                $dbh->exec('TRUNCATE TABLE `' . $row[0] . '`');
            }
            $dbh->exec('SET FOREIGN_KEY_CHECKS=1;');
            /** End **/

        } catch (\Exception $e) {
            throw new ModuleException(__CLASS__, $e->getMessage());
        }
    }
}