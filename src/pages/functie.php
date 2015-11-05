<form action="functie/new" method="post">
    <ul>
        <li>functie naam: <input type="text" value="functie_naam_default" name="functie_naam"/></li>
        <li>scenario: <input type="text" value="scenario_default" name="scenario"/></li>
        <li>riscofactor <select name="risco">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></li>
        <li><input type="submit" value="submit"/></li>
    </ul>

</form>