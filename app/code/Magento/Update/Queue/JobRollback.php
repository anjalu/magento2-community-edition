<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Update\Queue;

use \Magento\Update\Rollback;

/**
 * Magento updater application 'rollback' job.
 */
class JobRollback extends AbstractJob
{
    const BACKUP_FILE_NAME = 'backup_file_name';

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        if (!isset($this->params[self::BACKUP_FILE_NAME])) {
            throw new \Exception ('Missing required parameter: ' . self::BACKUP_FILE_NAME);
        }
        $rollBack = new Rollback();
        $rollBack->manualRollback($this->params[self::BACKUP_FILE_NAME]);
        return $this;
    }
}
