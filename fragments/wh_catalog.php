<?php /*
https://chekromul.github.io/uikit-ecommerce-template
 *  Ausgabe der Katalog-Seite (Übersicht)
 *  */ ?>
<div class="uk-grid-margin uk-first-column">
    <div class="uk-grid-medium uk-grid" uk-grid="">
        <aside class="uk-width-1-4 uk-visible@m tm-aside-column uk-first-column">
            <nav class="uk-card uk-card-default uk-card-body uk-card-small uk-sticky" uk-sticky="bottom: true; offset: 90" style="">
                <ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true; offset: 90">
                    <?php foreach ($this->tree as $main_item) : ?>
                        <li><a href="#<?= rex_string::normalize($main_item['name_raw']) ?>"><?= $main_item['name_raw'] ?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav>
            <div class="uk-sticky-placeholder" style="height: 185px; margin: 0px;" hidden=""></div>
        </aside>
        <div class="uk-width-1-1 uk-width-expand@m">
            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                <?php foreach ($this->tree as $main_item) : ?>
                    <section id="<?= rex_string::normalize($main_item['name_raw']) ?>">
                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                            <header class="uk-card-header">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <?php if ($main_item['image']) : ?>
                                    <a href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>"><img src="/images/cat_thumb/<?= $main_item['image'] ?>" alt="<?= $main_item['name_raw'] ?>" width="100" height="100"></a>
                                    <?php endif ?>
                                    <div class="uk-width-expand">
                                        <h2 class="uk-h4 uk-margin-remove"><a class="uk-link-heading" href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>"><?= $main_item['name_raw'] ?></a></h2>
                                    </div>
                                </div>
                            </header>
                            <?php if (isset($main_item['level'])) : ?>
                                <div class="uk-card-body">
                                    <ul class="uk-list">
                                        <?php foreach ($main_item['level'] as $sub_item) : ?>
                                            <li><a href="<?= rex_getUrl('', '', ['category_id' => $sub_item['id']]) ?>"><?= $sub_item['name_raw'] ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                        </div>
                    </section>
                <?php endforeach ?>
            </div>
        </div>
        <?php if (isset($this->path) && $this->path) : ?>
        <div class="uk-width-1-1 uk-width-expand@m">
            <div>
                <?php if (count($this->path)) : ?>
                    <a href="<?= rex_getUrl() ?>">{{ zur Übersicht }}</a>
                <?php endif // hier ggf. Pfadansicht erweitern ?>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>
