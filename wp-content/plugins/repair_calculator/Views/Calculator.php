<div class="wrap">
    <h1>Формы</h1>

    <form method="POST" action="">
        <input type="hidden" name="action" value="set">
        
        <!-- Instruction -->
        <h3>Инструкция</h3>
        <div class="card">
            <p>При написании формул можно использовать стандартные арифметические знаки <b>+</b>, <b>-</b>, <b>*</b>, <b>/</b> и круглые скобки.</p>
            <p>В формулах также можно использовать следующие шаблоны подстановки:</p>
            <ul>
                <li><b>{{type_сoefficient}}</b> - коэффициент, установленный для выбранного пользователем типа ремонта.
                <li><b>{{area}}</b> - введенная пользователем площадь.
            </ul>
        </div>
      
        <!-- Repair type coefficient -->
        <h3>Коэффициенты типов ремонта</h3>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="options[type_coefficient][1]">Косметический ремонт</label>
                    </th>
                    <td>
                        <input 
                            name="options[type_coefficient][1]" 
                            type="text" 
                            value="<?= $type_coefficient->{1} ?>" 
                            class="regular-text"
                        />
                    </td>                  
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="options[type_coefficient][2]">Капитальный ремонт (эконом)</label>
                    </th>
                    <td>
                        <input 
                            name="options[type_coefficient][2]" 
                            type="text" 
                            value="<?= $type_coefficient->{2} ?>" 
                            class="regular-text"
                        />
                    </td>                  
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="options[type_coefficient][3]">Капитальный ремонт (стандарт)</label>
                    </th>
                    <td>
                        <input 
                            name="options[type_coefficient][3]" 
                            type="text" 
                            value="<?= $type_coefficient->{3} ?>" 
                            class="regular-text"
                        />
                    </td>                  
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="options[type_coefficient][4]">Евро ремонт</label>
                    </th>
                    <td>
                        <input 
                            name="options[type_coefficient][4]" 
                            type="text" 
                            value="<?= $type_coefficient->{4} ?>" 
                            class="regular-text"
                        />
                    </td>                  
                </tr>
            </tbody>
        </table>
        
        <!-- Repair type coefficient -->
        <h3>Формулы</h3>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="options[formulas][materials]">Стоимость отделочных материалов</label>
                    </th>
                    <td>
                        <input 
                            name="options[formulas][materials]" 
                            type="text" 
                            value="<?= $formulas->materials ?>" 
                            class="large-text"
                        />
                    </td>                  
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="options[formulas][summary]">Всего</label>
                    </th>
                    <td>
                        <input 
                            name="options[formulas][summary]" 
                            type="text" 
                            value="<?= $formulas->summary ?>" 
                            class="large-text"
                        />
                    </td>                  
                </tr>
            </tbody>
        </table>
       
       <input type="submit" class="button-primary" value="Сохранить">
    </form>
</div>
