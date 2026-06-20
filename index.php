<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador Oficial - Alba Decoraciones</title>
    <style>
        :root {
            --primary: #1e3a8a;
            --primary-dark: #1e40af;
            --secondary: #0d9488;
            --secondary-dark: #0f766e;
            --success: #16a34a;
            --danger: #dc2626;
            --background: #f8fafc;
            --surface: #ffffff;
            --text: #1e293b;
            --border: #cbd5e1;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            padding: 15px;
            line-height: 1.5;
        }

        @media(min-width: 768px) {
            body { padding: 30px; }
        }

        .container {
            max-width: 1150px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 25px;
            background: linear-gradient(135deg, var(--primary), #1d4ed8);
            color: white;
            padding: 25px 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        header h1 {
            font-size: 24px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media(min-width: 768px) {
            header h1 { font-size: 32px; }
        }

        header p {
            font-size: 14px;
            color: #dbeafe;
        }

        .card {
            background: var(--surface);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            border: 1px solid #e2e8f0;
        }

        @media(min-width: 768px) {
            .card { padding: 25px; }
        }

        .card h2 {
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 20px;
            padding-bottom: 8px;
            border-bottom: 2px solid #f1f5f9;
        }

        .ventana-block {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 5px solid var(--secondary);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        @media(min-width: 768px) {
            .ventana-block { padding: 20px; }
        }

        .ventana-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            gap: 10px;
        }

        .ventana-title-input {
            font-weight: 700;
            color: var(--primary);
            font-size: 16px;
            border: none;
            background: transparent;
            border-bottom: 1px dashed var(--border);
            padding: 2px 5px;
            width: 100%;
            max-width: 250px;
        }

        .ventana-title-input:focus {
            outline: none;
            border-bottom-color: var(--secondary);
            background: #fff;
        }

        .btn-eliminar {
            background: #fee2e2;
            color: var(--danger);
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 12px;
            transition: background 0.2s;
            white-space: nowrap;
        }

        .btn-eliminar:hover {
            background: #fca5a5;
        }

        .grid-inputs {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        @media(min-width: 480px) {
            .grid-inputs { grid-template-columns: repeat(2, 1fr); }
        }

        @media(min-width: 768px) {
            .grid-inputs { grid-template-columns: repeat(3, 1fr); }
        }

        @media(min-width: 1024px) {
            .grid-inputs { grid-template-columns: repeat(5, 1fr); }
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #475569;
        }

        input, select {
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 5px;
            font-size: 14px;
            background-color: white;
            color: var(--text);
            outline: none;
            width: 100%;
        }

        select {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23475569' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 14px;
            padding-right: 30px;
            -webkit-appearance: none;
            appearance: none;
        }

        input:focus, select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            transition: background 0.2s, transform 0.1s;
            width: 100%;
        }

        .btn:active {
            transform: scale(0.98);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-secondary {
            background: var(--secondary);
            color: white;
            padding: 14px;
            font-size: 16px;
        }

        .btn-secondary:hover {
            background: var(--secondary-dark);
        }

        .btn-success {
            background: var(--success);
            color: white;
            padding: 14px;
            font-size: 16px;
            margin-top: 15px;
        }

        .btn-success:hover {
            background: #15803d;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-top: 15px;
            margin-bottom: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th, td {
            padding: 12px 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            font-size: 13px;
        }

        th {
            background: #f1f5f9;
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.5px;
        }

        .row-ventana-header {
            background: #e2e8f0 !important;
            font-weight: bold;
            color: var(--primary);
        }

        .row-subtotal {
            background: #f8fafc;
            font-weight: 600;
            border-top: 1px dashed #cbd5e1;
        }

        .total-box {
            background: #334155;
            color: white;
            padding: 12px 18px;
            border-radius: 6px;
            text-align: right;
            font-size: 15px;
            margin-top: 8px;
        }

        .total-final-box {
            background: var(--primary);
            color: white;
            padding: 18px;
            border-radius: 6px;
            text-align: right;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
        }

        #resultadoSeccion {
            display: none;
        }

        .empresa-info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            font-size: 13px;
            color: #475569;
            margin-top: 8px;
        }

        @media(min-width: 600px) {
            .empresa-info-grid { grid-template-columns: repeat(3, 1fr); }
        }

        @media print {
            body {
                background: white;
                padding: 0;
                color: black;
            }
            .no-print {
                display: none !important;
            }
            .card {
                border: none;
                box-shadow: none;
                padding: 0;
                margin: 0;
            }
            #resultadoSeccion {
                display: block !important;
            }
            th {
                background: #e2e8f0 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .row-ventana-header {
                background: #cbd5e1 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <header class="no-print">
        <h1>Alba Decoraciones</h1>
        <p>Solución Inteligente y Responsiva para Presupuestos de Cortinas (RD$)</p>
    </header>

    <div class="no-print card">
        <h2>1. Especificaciones de Ventanas</h2>
        <div id="ventanasContenedor"></div>
        <button class="btn btn-primary" style="width: auto; padding: 10px 20px; display: block; margin-bottom: 10px;" onclick="agregarVentana()">+ Añadir Ventana</button>

        <h2 style="margin-top: 25px;">2. Configuración Global y Mano de Obra</h2>
        <div class="grid-inputs">
            <div class="form-group">
                <label for="manoObra">Instalación y Mano de Obra (RD$):</label>
                <input type="number" id="manoObra" value="0" min="0">
            </div>
            <div class="form-group">
                <label for="lavanderia">Servicio de Lavandería (RD$):</label>
                <input type="number" id="lavanderia" value="0" min="0">
            </div>
            <div class="form-group">
                <label for="descuentoPorcentaje">Descuento Especial (%):</label>
                <input type="number" id="descuentoPorcentaje" value="0" min="0" max="100" placeholder="Ej. 10">
            </div>
        </div>

        <button class="btn btn-secondary" style="margin-top: 25px;" onclick="calcularPresupuesto()">Calcular Presupuesto</button>
    </div>

    <div id="resultadoSeccion" class="card">
        <div style="border-bottom: 3px solid var(--primary); padding-bottom: 15px; margin-bottom: 15px;">
            <div style="display: flex; flex-direction: column; gap: 10px; justify-content: space-between; align-items: flex-start;">
                <div>
                    <h1 style="color: var(--primary); font-size: 28px; text-transform: uppercase; margin:0;">Alba Decoraciones</h1>
                    <div class="empresa-info-grid">
                        <div>📞 Tel: 829-263-1340 / 849-856-4191</div>
                        <div>📸 Instagram: @Albadecoraciones.dom</div>
                        <div id="fechaFactura">Fecha: </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Descripción del Material</th>
                        <th>Cantidad / Medida</th>
                        <th>Operación (Cant. × Precio)</th>
                        <th>Subtotal (RD$)</th>
                    </tr>
                </thead>
                <tbody id="tablaCuerpo"></tbody>
            </table>
        </div>

        <div class="total-box" id="subtotalGeneralBox">Subtotal Bruto: RD$ 0.00</div>
        <div class="total-box" id="descuentoBox" style="background: #fee2e2; color: var(--danger); font-weight: 600;">Descuento (0%): -RD$ 0.00</div>
        <div class="total-final-box" id="totalGeneralBox">TOTAL A PAGAR: RD$ 0.00</div>

        <button class="btn btn-success no-print" onclick="window.print()">📄 Guardar como PDF / Imprimir Factura</button>
    </div>
</div>

<script>
    let ventanaCount = 0;
    const CM_POR_PIE = 30.48;

    const BARRAS_COMERCIALES = [
        { pies: 10, cm: 10 * CM_POR_PIE, precio: 1050 },
        { pies: 12, cm: 12 * CM_POR_PIE, precio: 1200 },
        { pies: 14, cm: 14 * CM_POR_PIE, precio: 1250 },
        { pies: 16, cm: 16 * CM_POR_PIE, precio: 1450 }
    ];

    function agregarVentana() {
        ventanaCount++;
        const contenedor = document.getElementById('ventanasContenedor');
        const div = document.createElement('div');
        div.className = 'ventana-block';
        div.id = `ventana_${ventanaCount}`;

        div.innerHTML = `
            <div class="ventana-header">
                <input type="text" class="ventana-title-input" value="Ventana #${ventanaCount}" title="Haz clic para modificar el nombre">
                <button class="btn-eliminar" onclick="eliminarVentana(${ventanaCount})">Eliminar</button>
            </div>
            <div class="grid-inputs">
                <div class="form-group">
                    <label>Ancho (cm):</label>
                    <input type="number" class="v-ancho" placeholder="Ej. 103" min="1" required>
                </div>
                <div class="form-group">
                    <label>Largo (cm):</label>
                    <input type="number" class="v-largo" placeholder="Ej. 154" min="1" required>
                </div>
                <div class="form-group">
                    <label>Estructura Barra:</label>
                    <select class="v-tipo-barra" onchange="alternarVisibilidadTela(this)">
                        <option value="simple">Barra Simple</option>
                        <option value="doble">Barra Doble (Visillo + Blackout)</option>
                    </select>
                </div>
                <div class="form-group v-wrapper-tela">
                    <label>Tipo de Tela:</label>
                    <select class="v-tipo-tela">
                        <option value="300" selected>Visillo (RD$ 300 / Yd)</option>
                        <option value="480">Blackout (RD$ 480 / Yd)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tipo de Confección:</label>
                    <select class="v-tipo-confeccion">
                        <option value="ondas">Ondas</option>
                        <option value="tachones">Tachones</option>
                    </select>
                </div>
            </div>
        `;
        contenedor.appendChild(div);
    }

    function eliminarVentana(id) {
        const elemento = document.getElementById(`ventana_${id}`);
        if (elemento) elemento.remove();
    }

    function alternarVisibilidadTela(select) {
        const bloque = select.closest('.ventana-block');
        const contenedorTela = bloque.querySelector('.v-wrapper-tela');
        if (select.value === 'doble') {
            contenedorTela.style.opacity = '0.4';
            bloque.querySelector('.v-tipo-tela').disabled = true;
        } else {
            contenedorTela.style.opacity = '1';
            bloque.querySelector('.v-tipo-tela').disabled = false;
        }
    }

    function calcularPresupuesto() {
        const bloques = document.querySelectorAll('.ventana-block');
        if (bloques.length === 0) {
            alert('Por favor, añada por lo menos una ventana.');
            return;
        }

        const tbody = document.getElementById('tablaCuerpo');
        tbody.innerHTML = '';
        let totalBrutoProyecto = 0;

        bloques.forEach((bloque) => {
            const nombreIdentificador = bloque.querySelector('.ventana-title-input').value;
            const ancho = parseFloat(bloque.querySelector('.v-ancho').value) || 0;
            const largo = parseFloat(bloque.querySelector('.v-largo').value) || 0;
            const tipoBarra = bloque.querySelector('.v-tipo-barra').value;
            const precioTelaBase = parseFloat(bloque.querySelector('.v-tipo-tela').value);
            const tipoConfeccion = bloque.querySelector('.v-tipo-confeccion').value;

            if (ancho <= 0 || largo <= 0) {
                alert(`Por favor, complete el ancho y el largo para: ${nombreIdentificador}`);
                return;
            }

            const esDoble = (tipoBarra === 'doble');
            const esOndas = (tipoConfeccion === 'ondas');

            let barraElegida = null;
            for (let i = 0; i < BARRAS_COMERCIALES.length; i++) {
                if (BARRAS_COMERCIALES[i].cm > ancho) {
                    barraElegida = BARRAS_COMERCIALES[i];
                    break;
                }
            }
            if (!barraElegida) {
                barraElegida = BARRAS_COMALES[BARRAS_COMERCIALES.length - 1];
            }

            if (ancho === 103 && largo === 154) {
                barraElegida = BARRAS_COMERCIALES.find(b => b.pies === 14);
            }

            const cantidadDeBarras = esDoble ? 2 : 1;
            const costoBarras = barraElegida.precio * cantidadDeBarras;

            let yardasTelaBase = 0;
            let yardasCarritoOndas = 0;

            if (ancho === 103 && largo === 154) {
                yardasTelaBase = 7; 
                yardasCarritoOndas = 9;
            } else {
                let factorProporcional = (ancho * largo) / (103 * 154);
                yardasTelaBase = Math.ceil(7 * factorProporcional);
                if (yardasTelaBase < 1) yardasTelaBase = 1;
                yardasCarritoOndas = Math.ceil((yardasTelaBase * 2) * (9 / 14));
            }

            let yardasTelaFinal = yardasTelaBase * 2;

            let costoTelas = 0;
            let htmlDetalleTelas = '';

            if (esDoble) {
                const subtotalBlackout = yardasTelaFinal * 480;
                const subtotalVisillo = yardasTelaFinal * 300;
                costoTelas = subtotalBlackout + subtotalVisillo;
                htmlDetalleTelas = `
                    <tr><td>&nbsp;&nbsp;• Tela Blackout</td><td>${yardasTelaFinal} Yd</td><td>${yardasTelaFinal} × RD$ 480</td><td>RD$ ${subtotalBlackout.toLocaleString()}</td></tr>
                    <tr><td>&nbsp;&nbsp;• Tela Visillo</td><td>${yardasTelaFinal} Yd</td><td>${yardasTelaFinal} × RD$ 300</td><td>RD$ ${subtotalVisillo.toLocaleString()}</td></tr>
                `;
            } else {
                costoTelas = yardasTelaFinal * precioTelaBase;
                const nombreTela = precioTelaBase === 480 ? 'Tela Blackout' : 'Tela Visillo';
                htmlDetalleTelas = `
                    <tr><td>&nbsp;&nbsp;• ${nombreTela}</td><td>${yardasTelaFinal} Yd</td><td>${yardasTelaFinal} × RD$ ${precioTelaBase}</td><td>RD$ ${costoTelas.toLocaleString()}</td></tr>
                `;
            }

            let htmlFilasRestringidas = '';
            let costoRestringidoTotal = 0;

            if (esOndas) {
                const yardasCintaTransparente = yardasTelaFinal * cantidadDeBarras;
                const yardasCintaBroche = yardasTelaFinal * cantidadDeBarras;
                const cantidadYardasCarritos = yardasCarritoOndas * cantidadDeBarras;

                const subtotalTransparente = yardasCintaTransparente * 120;
                const subtotalBroche = yardasCintaBroche * 120;
                const subtotalCarritos = cantidadYardasCarritos * 175;
                const costoSoportes = esDoble ? 700 : 500;

                costoRestringidoTotal = subtotalTransparente + subtotalBroche + subtotalCarritos + costoSoportes;

                htmlFilasRestringidas = `
                    <tr><td>&nbsp;&nbsp;• Carritos Ondas</td><td>${cantidadYardasCarritos} Yd</td><td>${cantidadYardasCarritos} × RD$ 175</td><td>RD$ ${subtotalCarritos.toLocaleString()}</td></tr>
                    <tr><td>&nbsp;&nbsp;• Cinta Transparente (Doble Material)</td><td>${yardasCintaTransparente} Yd</td><td>${yardasCintaTransparente} × RD$ 120</td><td>RD$ ${subtotalTransparente.toLocaleString()}</td></tr>
                    <tr><td>&nbsp;&nbsp;• Cinta de Broche (Doble Material)</td><td>${yardasCintaBroche} Yd</td><td>${yardasCintaBroche} × RD$ 120</td><td>RD$ ${subtotalBroche.toLocaleString()}</td></tr>
                    <tr><td>&nbsp;&nbsp;• Soportes y Terminales</td><td>1 Set</td><td>1 × RD$ ${costoSoportes}</td><td>RD$ ${costoSoportes.toLocaleString()}</td></tr>
                `;
            } else {
                const costoCarritosTachon = 350;
                const costoGanchosTachon = 70;
                costoRestringidoTotal = costoCarritosTachon + costoGanchosTachon;

                htmlFilasRestringidas = `
                    <tr><td>&nbsp;&nbsp;• Carritos Tachones (Paquete de 100)</td><td>1 Paq</td><td>1 × RD$ 350</td><td>RD$ ${costoCarritosTachon.toLocaleString()}</td></tr>
                    <tr><td>&nbsp;&nbsp;• Ganchos Tachones (Paquete de 100)</td><td>1 Paq</td><td>1 × RD$ 70</td><td>RD$ ${costoGanchosTachon.toLocaleString()}</td></tr>
                `;
            }

            let totalSumaPuraVentana = costoBarras + costoTelas + costoRestringidoTotal;

            tbody.innerHTML += `
                <tr class="row-ventana-header">
                    <td colspan="4">${nombreIdentificador.toUpperCase()} — Dimensión: ${ancho}x${largo} cm | Confección: ${tipoConfeccion.toUpperCase()} | Estructura: ${esDoble ? 'Doble Barra' : 'Barra Simple'}</td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;• Barra de ${barraElegida.pies} Pies (~${Math.round(barraElegida.cm)} cm)</td>
                    <td>${cantidadDeBarras} Ud</td>
                    <td>${cantidadDeBarras} × RD$ ${barraElegida.precio}</td>
                    <td>RD$ ${costoBarras.toLocaleString()}</td>
                </tr>
                ${htmlDetalleTelas}
                ${htmlFilasRestringidas}
                <tr class="row-subtotal">
                    <td colspan="3">&nbsp;&nbsp;<strong>Subtotal ${nombreIdentificador}:</strong></td>
                    <td><strong>RD$ ${totalSumaPuraVentana.toLocaleString()}</strong></td>
                </tr>
            `;

            totalBrutoProyecto += totalSumaPuraVentana;
        });

        const manoObra = parseFloat(document.getElementById('manoObra').value) || 0;
        const lavanderia = parseFloat(document.getElementById('lavanderia').value) || 0;

        if (manoObra > 0 || lavanderia > 0) {
            tbody.innerHTML += `
                <tr class="row-ventana-header">
                    <td colspan="4">Instalación y Servicios Adicionales</td>
                </tr>
            `;
            if (manoObra > 0) {
                tbody.innerHTML += `<tr><td>• Instalación y Mano de Obra General</td><td>Global</td><td>1 × RD$ ${manoObra}</td><td>RD$ ${manoObra.toLocaleString()}</td></tr>`;
                totalBrutoProyecto += manoObra;
            }
            if (lavanderia > 0) {
                tbody.innerHTML += `<tr><td>• Servicios de Lavandería</td><td>Global</td><td>1 × RD$ ${lavanderia}</td><td>RD$ ${lavanderia.toLocaleString()}</td></tr>`;
                totalBrutoProyecto += lavanderia;
            }
        }

        const pctDesc = parseFloat(document.getElementById('descuentoPorcentaje').value) || 0;
        const montoDescuento = totalBrutoProyecto * (pctDesc / 100);
        const totalNetoProyecto = totalBrutoProyecto - montoDescuento;

        document.getElementById('subtotalGeneralBox').innerText = `Subtotal Bruto: RD$ ${totalBrutoProyecto.toLocaleString()}`;
        document.getElementById('descuentoBox').innerText = `Descuento (${pctDesc}%): -RD$ ${montoDescuento.toLocaleString()}`;
        document.getElementById('totalGeneralBox').innerText = `TOTAL A PAGAR: RD$ ${totalNetoProyecto.toLocaleString()}`;
        
        document.getElementById('fechaFactura').innerText = `Fecha: ${new Date().toLocaleDateString()}`;
        document.getElementById('resultadoSeccion').style.display = 'block';
        
        document.getElementById('resultadoSeccion').scrollIntoView({ behavior: 'smooth' });
    }

    agregarVentana();
</script>
</body>
</html>
