import {
  MDBBtn,
  MDBModal,
  MDBModalDialog,
  MDBModalContent,
  MDBModalHeader,
  MDBModalTitle,
  MDBModalBody,
} from 'mdb-react-ui-kit';
import "../styles/style_prestations.css";

export default function ModalPret({open, imageModal, onClose }) {
  
  return (
    <>
      <MDBModal open={open} onClose={onClose} backdrop={false} tabIndex='-1'>
        <MDBModalDialog scrollable>
          <MDBModalContent>
            <MDBModalHeader>
              <MDBModalTitle>Nos réalisations</MDBModalTitle>
              <MDBBtn
                className='btn-close'
                color='black'
                onClick={onClose}
              ></MDBBtn>
            </MDBModalHeader>
            <MDBModalBody>
              {Array.isArray(imageModal) && imageModal.map((item, index) => (
              <div key={index}>
                <img src={item.image} alt="" />
                <p>{item.description}</p>
              </div>
            ))}
            </MDBModalBody>
          </MDBModalContent>
        </MDBModalDialog>
      </MDBModal>
    </>
  );
}