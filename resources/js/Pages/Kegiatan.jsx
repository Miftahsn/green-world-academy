import React from 'react'
import Nav from "../../js/components/Nav"
import InfoAktivitas from '../components/InfoAktivitas'
import Footer from "../../js/components/Footer"


const Kegiatan = ({kegiatan}) => {
  return (
    <div>
      <Nav/>
      <InfoAktivitas data={kegiatan}/>
      <Footer/>
    </div>
  )
}

export default Kegiatan