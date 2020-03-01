import React from "react";

const TransferForm = ({form, handleChange, handleSubmit}) => (
    <form className="form-inline justify-content-center"
          onSubmit={handleSubmit}
    >
        <div className="form-group mb-2">
            <input className="form-control"
                placeholder="Descripcion"
                type="text"
                name="description"
                value={form.description}
                onChange={handleChange}
            />
        </div> 
        <div className="input-group mx-sm-2 mb-2">
            <div className="input-group-prepend">
                <div className="input-group-text">$</div>
            </div>
            <input className="form-control"
                type="text"
                name="amount"
                value={form.amount}
                onChange={handleChange}
            />
        </div> 
        <button className="btn btn-primary mb-2" 
                type="submit">
            Add  
        </button>
    </form>
);

export default TransferForm;