Resplado de codigo / No lo borres es el que te sirve para los modales, pero debes modificarlos yaq ue hay fallas en ellos

/* Capitulo 5: Modales - 20/01/2026*/
/* Agregar Dartos (Proveedor, ventas, usuarios, invnetario) */
/* --- ESTILOS DEL MODAL (REGISTRAR VENTA) --- */
/* 1. Contenedor de fondo (Overlay) */
.modal-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Fondo oscuro semitransparente */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2000; /* Por encima de la sidebar y navbar */
    backdrop-filter: blur(4px); /* Efecto de desenfoque al fondo */
}

/* 2. Caja del contenido */
.modal-content {
    background: #fff;
    width: 90%;
    max-width: 800px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    overflow: hidden;
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* 3. Encabezado del Modal */
.modal-header {
    background: #1e293b; /* Color oscuro profesional */
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-header h3 {
    margin: 0;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.close-modal {
    background: none;
    border: none;
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
    transition: color 0.2s;
}

.close-modal:hover {
    color: #ef4444;
}

/* 4. Cuerpo del Formulario */
.modal-form {
    padding: 25px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Dos columnas */
    gap: 30px;
    margin-bottom: 25px;
}

/* Responsive: una columna en pantallas pequeñas */
@media (max-width: 768px) {
    .form-grid { grid-template-columns: 1fr; }
}

.form-section h4 {
    color: #64748b;
    border-bottom: 2px solid #f1f5f9;
    padding-bottom: 8px;
    margin-bottom: 15px;
    font-size: 0.9rem;
    text-transform: uppercase;
}

/* Inputs y Grupos */
.input-group {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.input-group label {
    font-weight: 600;
    font-size: 0.85rem;
    color: #334155;
}

.input-group input, 
.input-group select {
    padding: 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.2s;
}

.input-group input:focus, 
.input-group select:focus {
    border-color: #3b82f6;
}

/* Fila de Unidades y Precio */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

input[readonly] {
    background-color: #f8fafc;
    color: #64748b;
    cursor: not-allowed;
}

/* 5. Pie del Modal (Footer) */
.form-footer {
    border-top: 2px solid #f1f5f9;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.total-display {
    display: flex;
    flex-direction: column;
}

.total-display span {
    font-size: 0.85rem;
    color: #64748b;
}

.total-display strong {
    font-size: 1.5rem;
    color: #1e293b;
}

/* Botones de acción */
.form-actions {
    display: flex;
    gap: 10px;
}

.btn-secondary {
    background: #e2e8f0;
    color: #475569;
    padding: 10px 20px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.btn-main-action {
    background: #3b82f6;
    color: white;
    padding: 10px 20px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.2s;
}

.btn-main-action:hover {
    background: #2563eb;
}
/* Fin del codigo */






/* Reports/
/*  */