import React from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

const InfoAktivitas = ({ data }) => {
    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    };
    // bersihkan tag html
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
    };
    return (
        <div className="w-full bg-white pt-32 px-8 justify-center xl:mx-auto">
            <h3 className="font-elsie text-4xl font-semibold text-Green1 text-center mb-8">Our Activities</h3>
            <Slider {...settings}>
                {data.map((kegiatan) => (
                    <div className="w-full flex flex-wrap px-4">
                        <div className="rounded-xl px-8 py-8 lg:flex flex-column shadow-lg overflow-hidden mb-10">
                            <img
                                src={`/img/${kegiatan.galeri} `}
                                alt={kegiatan.judul}
                                className=""
                            />
                            <div className="lg:mx-6">
                                <h3 className="block mb-3 font-semibold text-4xl text-Green1 pt-4 font-elsie">
                                    {kegiatan.judul}
                                </h3>
                                <p
                                    className="font-normal font-space text-base text-secondary font-space max-w-xl lg:text-lg"
                                    dangerouslySetInnerHTML={renderHTML(
                                        kegiatan.kegiatan
                                    )}
                                ></p>
                            </div>
                        </div>
                    </div>
                ))}
            </Slider>
        </div>
    );
};

export default InfoAktivitas;
