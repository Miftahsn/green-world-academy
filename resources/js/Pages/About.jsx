import React from 'react'
import Nav from '../components/Nav'
import VisiMisi from '../components/VisiMisi'
import Sejarah from '../components/Sejarah'
import Footer from '../components/Footer'

const About = ({ profile }) => {
  return (
    <div>
        <Nav/>
        <VisiMisi data={profile}/>
        <Sejarah data={profile}/>
        <Footer/>
    </div>
  )
}

export default About