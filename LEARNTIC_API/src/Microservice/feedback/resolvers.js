import { generalRequest, getRequest } from '../../utilities';
import { url, port, entryPoint, user, course } from './server';
import { feedbackByUser, feedbackByCourse } from '../../logic';

const URL = `http://${url}:${port}/${entryPoint}`;

const resolvers = {
	Query: {
		allFeedback: (_) =>
			getRequest(URL, ''),
		feedbackById: (_, {id}) =>
			generalRequest(`${URL}/${id}`, 'GET'),
		feedbackByUser: (_, {id_usuario}) => {
			let response= feedbackByUser(`${URL}/${user}/${id_usuario}`);
      return response;
		},
    feedbackByCourse: (_, {id_curso}) => {
			let response= feedbackByCourse(`${URL}/${course}/${id_curso}`);
      return response;
		}
	},
	Mutation: {
		createFeedback: (_, { feedback }) =>
			generalRequest(`${URL}/`, 'POST', feedback),
		updateFeedback: (_, { id, feedback }) =>
			generalRequest(`${URL}/${id}`, 'PUT', feedback),
		deleteFeedback: (_, { id }) =>
			generalRequest(`${URL}/${id}`, 'DELETE')
	}
};

export default resolvers;
