<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 15.04.2016
 */
namespace skeeks\cms\search\controllers;

use skeeks\cms\components\Cms;
use skeeks\cms\grid\SiteColumn;
use skeeks\cms\models\CmsAgent;
use skeeks\cms\models\CmsContent;
use skeeks\cms\models\CmsSearchPhrase;
use skeeks\cms\modules\admin\actions\AdminAction;
use skeeks\cms\modules\admin\actions\modelEditor\AdminMultiModelEditAction;
use skeeks\cms\modules\admin\actions\modelEditor\ModelEditorGridAction;
use skeeks\cms\modules\admin\controllers\AdminController;
use skeeks\cms\modules\admin\controllers\AdminModelEditorController;
use skeeks\cms\modules\admin\traits\AdminModelEditorStandartControllerTrait;
use yii\helpers\ArrayHelper;

/**
 * Class AdminSearchPhraseGroupController
 * @package skeeks\cms\controllers
 */
class AdminSearchPhraseGroupController extends AdminController
{
    public function init()
    {
        $this->name                     = "РџРѕРёСЃРєРѕРІС‹Рµ С„СЂР°Р·С‹";

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(),
            [
                'index' =>
                [
                    'class'         => AdminAction::className(),
                    'name'          => 'РЎРїРёСЃРѕРє',
                    "icon"          => "glyphicon glyphicon-th-list",
                    "priority"      => 0,
                ],
            ]
        );
    }

}
