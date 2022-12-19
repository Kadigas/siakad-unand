import Image from 'next/image'
import styles from '../../../styles/DashboardDosen.module.css'
import Head from '../../../components/Head'
import Nav from '../../../components/Dosen/Nav'
import Navdrawer from '../../../components/Dosen/Nav-drawer'
import Activities from '../../../components/Dosen/Activities'
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
                <Image src="/timeline-pengumpulan-nilai-wrap.png" alt="Home" width={800} height={800} className='mt-4'/>
          </div>
          <div className='flex flex-row justify-center mb-4'>
              <div className={styles.card2}>
                <ul className='list-disc mx-2 my-2 divide-y-4 divide-solid'>
                <li className='my-5'>
                    <a href='/mahasiswa/modul/01/tugas/2'><h1 className='font-semibold text-lg'>Pengisian Nilai Tugas 1 Modul 1</h1></a>
                    <h2>Deadline 21/06/2022</h2>
                </li>
                <li className='my-5'>
                    <a href='/mahasiswa/modul/03/tugas/1'><h1 className='font-semibold text-lg'>Pengisian Nilai Tugas 2 Modul 11</h1></a>
                    <h2>Deadline 23/06/2022</h2>
                </li>
              </ul>
              </div>
          </div>
          <Footer />
        </div>
        <Activities />
      </div>
    </div>
  )
}
