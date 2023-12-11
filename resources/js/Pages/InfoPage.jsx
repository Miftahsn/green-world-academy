import React from 'react'
import Nav from '../components/Nav'
import InfoPen from '../components/InfoPen'
import Footer from '../components/Footer'

const InfoPage = ({info}) => {
  return (
    <div>
      <Nav/>
      <InfoPen data={info}/>
      <Footer/>
    </div>
  )
}

export default InfoPage