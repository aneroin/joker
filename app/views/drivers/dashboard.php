<!--graph -->
<div class="section">
    <div class="container">
    <h2 class="center">John Smith</h2>
        <div class="row center">
            <div class="col s12 m6 l6" >
                <div class="card">
                    <div class="card-content">
                        <p class="card-title grey-text text-darken-4">виконаних замовлень</p>
                        <div class="card-action" id="chart1"></div>
                    </div>
                </div>  
            </div>
            <div class="col s12 m6 l6" >
                <div class="card">
                    <div class="card-content">
                        <p class="card-title grey-text text-darken-4">робочих днів</p>
                        <div  class="card-action" id="chart2"></div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div> 
<!--Button array-->
<div class="section">
    <div class="container">
    <h2 class="center text_h2">Рахунок</h2>
       <div class="row center">
            <div  class="col s6 m6"> 
                <div class="card">
                    <div class="card-content">
                        <p class="card-title grey-text text-darken-4">основний</p>
                        <p class="card-action grey-text text-darken-2">103 грн.</p>
                    </div>
                </div>
            </div>
           <div  class="col s6 m6"> 
                <div class="card">
                    <div class="card-content">
                        <p class="card-title grey-text text-darken-4">бонусний</p>
                        <p class="card-action grey-text text-darken-2">17 грн.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--info array-->
<div class="section">
    <div class="container">
    <h2 class="center text_h2">Статистика</h2>
        <div class="row">
            <div  class="col s12 m12 l12" id="bar1">
                
            </div>
        </div>
    </div>
</div> 
<!--abracadabra-->
<div class="section">
    <div class="container">
        <h2 class="center text_h2">Замовлення</h2>
        <div class="row center">
        <div class="col s12">
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th data-field="№">№</th>
                            <th data-field="КОЛИ">КОЛИ</th>
                            <th data-field="З">З</th>
                            <th data-field="ДО">ДО</th>
                            <th data-field="КМ">КМ</th>
                            <th data-field="ЦІНА">ЦІНА</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i = 0; $i < 3; $i++): ?>
                        <tr>
                            <td>1</td>
                            <td>22.06.16</td>
                            <td>вул. Паралельна</td>
                            <td>вул. Перпендикулярна</td>
                            <td>4</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>22.06.16</td>
                            <td>вул. Ізометрична</td>
                            <td>вул. Ортогональна</td>
                            <td>6</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>23.06.16</td>
                            <td>вул. Ізометрична</td>
                            <td>вул. Перпендикулярна</td>
                            <td>3</td>
                            <td>20</td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
        </div>
        </div>
        </div>