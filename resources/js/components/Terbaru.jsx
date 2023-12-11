import React from "react";
import Memasak  from "../../../public/dist/img/credit/memasak.jpg"

const Terbaru = () => {
    return (
        <div>
            <div className="px-10 py-20 bg-white">
                
                    <div className="flex flex-wrap ml-5 mb-10">
                        <div className="w-full px-4 lg:w-1/2">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src={Memasak} alt="cook" />
                            </div>
                        </div>
                        <div className="w-full px-4 py-8 lg:w-1/2 pb-10">
                            <h2 className="font-bold font-elsie text-Green1 text-3xl mb-5 max-w-md lg:text-4xl">
                                Kegiatan Pekan Terakhir
                            </h2>
                            <a href="/kegiatan" className="bg-secondary px-6 py-4 rounded-xl hover:bg-white hover:text-Green1 font-semibold font-space">Lihat Kegiatan Terbaru</a>
                        </div>
                    </div>
            </div>
        </div>
    );
};

export default Terbaru;
