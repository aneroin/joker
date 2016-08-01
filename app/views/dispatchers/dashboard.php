<!--graph -->
<div class="section">
    <div class="container">
    <h2 class="center">John Smith</h2>
        <div class="row center">
			<div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">зроблено замовлень</p>
						<p class="card-action grey-text text-darken-2">8</p>
					</div>
				</div>	
			</div>
            <div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">проїхано кілометрів</p>
						<p class="card-action grey-text text-darken-2">46</p>
					</div>
				</div>	
			</div>
        </div>
    </div>
</div> 
<!--places-->
<div class="section">
    <div class="container">
    <h2 class="center">Мої місця</h2>
        <div class="row center">
			<div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Дім </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Ізометрична 3 </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>	
			</div>
            <div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Робота </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Перпендикулярна 11 </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>	
			</div>
			<div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Дача </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Ортогональна </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>	
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
                            <th data-field="КМ">ВОДІЙ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i = 0; $i < 3; $i++): ?>
                        <tr>
                            <td>1</td>
                            <td>22.06.16</td>
                            <td>вул. Паралельна</td>
                            <td>вул. Перпендикулярна</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>22.06.16</td>
                            <td>вул. Ізометрична</td>
                            <td>вул. Ортогональна</td>
                            <td>вул. Ортогональна</td>
                            <td>103</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>23.06.16</td>
                            <td>вул. Ізометрична</td>
                            <td>вул. Перпендикулярна</td>
                            <td>26</td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
        </div>
        </div>
        </div>