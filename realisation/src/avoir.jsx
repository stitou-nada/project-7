import { Modal,show,Button} from 'react-bootstrap';
import React, { useState } from "react";

const API_IMG="https://image.tmdb.org/t/p/w500/";
const Avoir =({titre, description, moyenne_vote, date ,id , image ,type})=>{

    const [show, setShow]=useState(false);
    const handleShow=()=>setShow(true);
    const handleClose=()=>setShow(false);
   
return(
    <div>
   
    <div className="card text-center bg-secondary mb-3">
    <div className="card-body">
        <img className="card-img-top" src={API_IMG+image} />
        <div className="card-body">
        <button type="button" className="btn btn-dark" onClick={handleShow}>View More</button>
        <Modal  show={show} onHide={handleClose}>
        <Modal.Header closeButton>
            <Modal.Title></Modal.Title>
            </Modal.Header>
            <Modal.Body>
                  <img className="card-img-top" style={{width:'14rem'}}src={API_IMG+image} />
                  <h3>{titre}</h3>
                  <h4>IMDb: {moyenne_vote}</h4>
                  <h5>Release Date: {date}</h5>
                  <br></br>
                  <h6>Overview</h6>
                  <p>{description}</p>
            </Modal.Body>
            <Modal.Footer>
                      <Button variant="secondary" onClick={handleClose}>Close</Button>
                  </Modal.Footer>
        </Modal>
        </div>
    </div>
   
</div>
</div>

)
}
export default Avoir;