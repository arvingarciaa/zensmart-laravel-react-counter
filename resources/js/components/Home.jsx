import {React, useEffect, useState} from 'react';

function Home() {
    const [count, setCount] = useState();

    useEffect(() => {
        getCount();
    },[])

    const getCount = async() => {
        const res = await axios.get('/api/getCount')
        if(res.status === 200){
            setCount(res.data[0].count);
        }
    }

    const incrementCount = async() => {
        const res = await axios.post('/api/incrementCount')
        if(res.status === 200){
            setCount((count) => count + 1);
        }
    }

    return (
        <>
            <div className="card-bg overflow-hidden shadow sm:rounded-lg">
                <div className="p-6 card-text text-center">
                    <div>{count}</div>
                </div>
            </div>
            <button type="button" className="btn mt-2" onClick={incrementCount}>Increment</button>
        </>
    )
}

export default Home
