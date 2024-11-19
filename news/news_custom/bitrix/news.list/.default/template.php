<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="news-list">
    <? if (!empty($arResult["SECTIONS"])): ?>
        <? foreach ($arResult["SECTIONS"] as $sectionId => $section): ?>
            <div class="news-section">
       
                <h2 class="news-section__title article-card__title"><?= $section["NAME"] ?></h2>
                
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <? if ($arItem["IBLOCK_SECTION_ID"] == $sectionId): ?>
                   
                        <div class="article-card">
                            <h3 class="article-card__title">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <?= $arItem["NAME"] ?>
                                </a>
                            </h3>

                            <div class="article-card__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>

                            <? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                                <div class="article-card__image sticky">
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" data-object-fit="cover" />
                                </div>
                            <? endif; ?>

                            <div class="article-card__text">
                                <?= $arItem["PREVIEW_TEXT"] ?>
                            </div>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </div>
        <? endforeach; ?>
   
</div>
