import Image from 'next/image'
import styles from '../../../styles/Dashboard.module.css'
import Head from '../../../components/Head'
import Nav from '../../../components/Mahasiswa/Nav'
import Navdrawer from '../../../components/Mahasiswa/Nav-drawer'
import Activities from '../../../components/Mahasiswa/Activities'
import Footer from '../../../components/Footer'

export default function Index() {
  return (
    <div className={styles.container}>
      <Head />
      <Nav />

      <div className='flex flex-row'>
        <Navdrawer />
        <div className='basis-4/6 mt-12 flex flex-col justify-between'>
          <div className='flex flex-row justify-center mt-12'>
            <Image src="/Presence.png" alt="PResensi" width={800} height={800} className='mt-4'/>
          </div>
          <div className='flex flex-col align-center my-2 mx-12'>
            <a className='bg-blue-700 duration-150 mx-12 text-white font-bold py-2 px-4 rounded flex flex-col items-center hover:bg-blue-900' href='#'>Presensi</a>
          </div>
          <Footer />
        </div>
        <Activities />
      </div>
    </div>
  )
}
