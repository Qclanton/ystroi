<div class="wrap">
    <h1>Формы</h1>

    <form method="POST" action="">
        <input type="hidden" name="action" value="set">
        
        <!-- Tabs navigation -->
        <h2 class="nav-tab-wrapper">
            <? foreach ($forms as $name=>$form) { ?>
                <a href="#" class="nav-tab <?= $activeTab == $name ? "nav-tab-active" : "" ?>" data-tab="<?= $name ?>">
                    <?= $form->title ?>
                </a>
            <? } ?> 
        </h2>
        
        
        <!-- Tabs content -->
        <div class="tabs-wrapper">
            <? foreach ($forms as $name=>$form) { ?>
                <!-- Tab '<?= $form->name ?>'-->
                <div class="tab-content" data-tab="<?= $name ?>" <?= $activeTab == $name ? "" : "style='display:none'" ?>>
                    <table class="form-table">
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <label for="options[forms][<?= $name ?>][theme]">Тема</label>
                                </th>
                                <td>
                                    <input 
                                        id="center-address" 
                                        name="options[forms][<?= $name ?>][theme]" 
                                        type="text" 
                                        value="<?= stripcslashes($form->theme) ?>" 
                                        class="large-text"
                                    />
                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row">
                                    <label for="options[forms][<?= $form->name ?>][text]">Текст</label>
                                </th>
                                <td>
                                    <? 
                                        wp_editor(
                                            stripcslashes($form->text),
                                            $name . "-text", 
                                            [
                                                'textarea_name' => "options[forms][{$name}][text]",
                                                'editor_class' => "large-text"                                            
                                            ]
                                        )
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <? } ?>        
       </div>
       
       <input type="submit" class="button-primary" value="Сохранить">
    </form>
</div>
