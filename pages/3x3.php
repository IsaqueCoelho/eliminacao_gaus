<!-- Modal Structure -->
<div id="resultCalc2" class="modal">
    <div class="modal-content">
        <h4>Resultado da Operação</h4>
        <p>
            <table class="responsive-table centered">
                <thead>
                    <tr>
                        <th>Vetor Resultado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="input-field col s4 m6 l12 result"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-field col s4 m6 l12 result"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-field col s4 m6 l12 result"></div>
                        </td>
                    </tr>
                </tbody>            
            </table>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-red btn-flat">ok</a>
    </div>
</div>

<div class="row"><h5>Matriz 3x3</h5> </div>
<form>
    <div class="row">
        <table class="responsive-table centered">
            <thead>
                <tr>
                    <th>Coluna 1</th>
                    <th>Coluna 2</th>
                    <th>Coluna 3</th>
                    <th>Vetor B</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c11" type="text" placeholder="X11" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c12" type="text" placeholder="X12" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c12" type="text" placeholder="X13" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field vectorB col s4 m6 l12">
                            <input id="t2_c12" type="text" placeholder="B1" maxlength="5">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c13" type="text" placeholder="X21" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="X22" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="X23" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field vectorB col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="B2" maxlength="5">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c13" type="text" placeholder="X31" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="X32" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field matrixA col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="X33" maxlength="5">
                        </div>
                    </td>
                    <td>
                        <div class="input-field vectorB col s4 m6 l12">
                            <input id="t2_c14" type="text" placeholder="B3" maxlength="5">
                        </div>
                    </td>
                </tr>
            </tbody>            
        </table>
    </div>
    <div class="row">
        <button class="btn waves-effect waves-light btnResultCalc" data-target="resultCalc" name="action">Calcular</button>
    </div>
</form>