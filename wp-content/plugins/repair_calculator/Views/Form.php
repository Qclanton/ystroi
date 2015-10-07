<div class="wrapper_inner-colored wrapper_inner-colored--dark-grey">
    <div class="calc_line__wrapper calc_line__wrapper--first">
        <span>Тип ремонта</span>
        <select id="repair-type">
            <option style="display: none" disabled="" selected="">Выберите</option>
            <option value="1">Косметический ремонт</option>
            <option value="2">Капитальный ремонт (эконом)</option>
            <option value="3">Капитальный ремонт (стандарт)</option>
            <option value="4">"Евро" ремонт</option>
        </select>
    </div>
    <div class="calc_line__wrapper">
        <span>Общая площадь помещений</span>
        <input id="repair-area" type="number" value="1" title="Общая площадь помещений" required>
        <span>м2</span>
    </div>
    <div class="calc_line__wrapper calc_line__wrapper-two-cols">
        <span>Стоимость отделочных материалов</span>
        <span><em id="materials-sum">0 000</em> руб./м2</span>
    </div>
    <div class="calc_line__wrapper calc_line__wrapper-two-cols">
        <span>Всего</span>
        <span><em id="summary-sum">0 000</em> руб./м2</span>
    </div>
</div>

<!-- Form handler -->
<script>
(function($){ $(function() {
    $('#repair-type, #repair-area').on('change', function() {
        // Data from backend
        var coefficients = {
            '1': "<?= $type_coefficient->{1} ?>",
            '2': "<?= $type_coefficient->{2} ?>",
            '3': "<?= $type_coefficient->{3} ?>",
            '4': "<?= $type_coefficient->{4} ?>"
        };        
        var materials_formula = "<?= $formulas->materials ?>";
        var summary_formula = "<?= $formulas->summary ?>";
        
        // Data from user
        var area = $('#repair-area').val();
        var type = $('#repair-type').val();
        var coefficient = coefficients[type];
        
        // Replace to real data 
        materials_formula = materials_formula.replace('{{type_coefficient}}', coefficient);
        materials_formula = materials_formula.replace('{{area}}', area);
        summary_formula = summary_formula.replace('{{type_coefficient}}', coefficient);
        summary_formula = summary_formula.replace('{{area}}', area);

        // Calc results
        var materials_sum = eval(materials_formula);
        var summary_sum = eval(summary_formula);
        
        // Show results to user
        $('#materials-sum').html(materials_sum > 0 ? materials_sum : "0 000");
        $('#summary-sum').html(summary_sum > 0 ? summary_sum : "0 000");
    });
}); })(jQuery);
</script>
