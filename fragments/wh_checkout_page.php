<div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
    <section class="uk-text-center uk-first-column"><a class="uk-link-muted uk-text-small" href="<?= rex_getUrl(rex_config::get('warehouse','cart_page')) ?>"><span class="uk-margin-xsmall-right uk-icon" uk-icon="icon: arrow-left; ratio: .75;"></span>{{ Return to cart }}</a>
        <h1 class="uk-margin-small-top uk-margin-remove-bottom">{{ Checkout }}</h1>
    </section>
    <section class="uk-grid-margin uk-first-column">
        <div class="uk-grid-medium uk-grid" uk-grid="">
            <form class="uk-form-stacked uk-width-1-1 tm-checkout uk-width-expand@m uk-first-column">
                <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                    
                    <?= html_entity_decode($this->form); ?>
                    
                </div>
            </form>            
        </div>
    </section>
</div>