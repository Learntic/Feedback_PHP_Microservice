export const feedbackTypeDef = `
  type Feedback {
      id: Int!
      id_usuario: String!
      id_curso: Int!
      opinion: String!
      nota: Float!
  }
  input FeedbackInput {
      id_usuario: String!
      id_curso: Int!
      opinion: String!
      nota: Float!
  }`;

export const feedbackQueries = `
      allFeedback: [Feedback]!
      feedbackById(id: Int!): Feedback!
      feedbackByUser(id_usuario: String!): [Feedback]!
      feedbackByCourse(id_curso: Int!): [Feedback]!
  `;

export const feedbackMutations = `
    createFeedback(feedback: FeedbackInput!): Feedback!
    updateFeedback(id: Int!, feedback: FeedbackInput!): Feedback!
    deleteFeedback(id: Int!): Int
`;
