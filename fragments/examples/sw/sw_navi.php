<?php /*
https://chekromul.github.io/uikit-ecommerce-template
 *  Ausgabe der Katalog-Seite (Übersicht)
 *  */ ?>
                <?php foreach ($this->tree as $main_item) : ?>
                    <section id="<?= rex_string::normalize($main_item['name_raw']) ?>">
                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                            <header class="uk-card-header">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <a href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>"><?= $main_item['name_raw'] ?></a>
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
        <?php if (isset($this->path) && $this->path) : ?>
        <div class="uk-width-1-1 uk-width-expand@m">
            <div>
                <?php if (count($this->path)) : ?>
                    <a href="<?= rex_getUrl() ?>">{{ zur Übersicht }}</a>
                <?php endif // hier ggf. Pfadansicht erweitern ?>
            </div>
        </div>
        <?php endif ?>
