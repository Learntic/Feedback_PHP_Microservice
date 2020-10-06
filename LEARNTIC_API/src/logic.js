const axios = require('axios');

const url = "http://3.210.254.47:";

export async function feedbackByUser(url){
	let res = await axios.get(url);
	return res.data;
}

export async function feedbackByCourse(url){
	let res = await axios.get(url);
	return res.data;
}
