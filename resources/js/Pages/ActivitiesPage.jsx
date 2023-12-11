import React from 'react'
import Nav from '../components/Nav'
import Galeri from '../components/Galeri'
import Terbaru from '../components/Terbaru'
import Footer from '../components/Footer'

const ActivitiesPage = ({kegiatan}) => {
  return (
    <div>
        <div>
        <Nav/>
        <Galeri/>
        <Terbaru data={kegiatan}/>
        <Footer/>
    </div>
    </div>
  )
}

export default ActivitiesPage