<div class="wrap">  
    <h1>Заказчики</h1>

    <table id="customers" class="widefat striped">
        <thead>
            <tr>
                <th>Ip-адрес</th>
                <th>Дата посещения</th>
                <th>Город</th>
                <th>Браузер</th>
            </tr>
        </thead>
        
        <tbody>
            <? foreach ($customers as $i=>$customer) { ?>
                <tr>                
                    <td><?= $customer->ip_address ?></td>
                    <td><?= $customer->visit_date ?></td>
                    <td><?= $customer->city ?></td>
                    <td><?= $customer->browser ?></td>                    
                </tr>
            <? } ?>
        </tbody>
    </table>
</div>
