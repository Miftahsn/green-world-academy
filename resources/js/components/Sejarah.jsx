import React from "react";

const Sejarah = ({ data }) => {
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
    };
    return (
        <div>
            <div className="px-10 py-10 bg-white text-white">
                {data.map((profile) => (
                    <div className="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="max-w-xl mx-auto text-center">
                                <div className="w-full px-10 py-10 bg-secondary bg-opacity-60 overflow-hidden shadow-lg">
                                    <h2 class="font-bold font-elsie text-3xl mb-5 max-w-md text-3xl mb-4">
                                        Sejarah
                                    </h2>
                                    <p
                                        className="font-normal font-space text-justify text-base max-w-xl lg:text-lg"
                                        dangerouslySetInnerHTML={renderHTML(
                                            profile.sejarah
                                        )}
                                    >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default Sejarah;
